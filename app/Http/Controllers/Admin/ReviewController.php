<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyReviewRequest;
use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Product;
use App\Review;
use App\Service;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ReviewController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('review_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Review::with(['service_reviewed', 'product_reviewed'])->select(sprintf('%s.*', (new Review)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'review_show';
                $editGate      = 'review_edit';
                $deleteGate    = 'review_delete';
                $crudRoutePart = 'reviews';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->addColumn('service_reviewed_title', function ($row) {
                return $row->service_reviewed ? $row->service_reviewed->title : '';
            });

            $table->addColumn('product_reviewed_name', function ($row) {
                return $row->product_reviewed ? $row->product_reviewed->name : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'service_reviewed', 'product_reviewed']);

            return $table->make(true);
        }

        return view('admin.reviews.index');
    }

    public function create()
    {
        abort_if(Gate::denies('review_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $service_revieweds = Service::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $product_revieweds = Product::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.reviews.create', compact('service_revieweds', 'product_revieweds'));
    }

    public function store(StoreReviewRequest $request)
    {
        $review = Review::create($request->all());

        return redirect()->route('admin.reviews.index');
    }

    public function edit(Review $review)
    {
        abort_if(Gate::denies('review_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $service_revieweds = Service::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $product_revieweds = Product::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $review->load('service_reviewed', 'product_reviewed');

        return view('admin.reviews.edit', compact('service_revieweds', 'product_revieweds', 'review'));
    }

    public function update(UpdateReviewRequest $request, Review $review)
    {
        $review->update($request->all());

        return redirect()->route('admin.reviews.index');
    }

    public function show(Review $review)
    {
        abort_if(Gate::denies('review_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $review->load('service_reviewed', 'product_reviewed');

        return view('admin.reviews.show', compact('review'));
    }

    public function destroy(Review $review)
    {
        abort_if(Gate::denies('review_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $review->delete();

        return back();
    }

    public function massDestroy(MassDestroyReviewRequest $request)
    {
        Review::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
