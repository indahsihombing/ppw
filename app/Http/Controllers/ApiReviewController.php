<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Review;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ApiReviewController extends Controller
{
    // READ - Mengambil ulasan berdasarkan report ID
    public function showReview($id)
    {
        try {
            $report = Report::with('reviews')->findOrFail($id);

            $reviews = $report->reviews->map(function ($review) use ($id) {
                return [
                    'id' => $review->id,
                    'review' => $review->review,
                    'rating' => $review->rating,
                    'links' => [
                        'self' => url("/api/reviews/{$review->id}"),
                        'delete_review' => url("/api/reviews/{$review->id}"),
                        'report' => url("/api/reports/{$id}")
                    ]
                ];
            });

            return response()->json([
                'data' => $reviews,
                'links' => [
                    'self' => url("/api/reports/{$id}/reviews"),
                    'create_review' => url('/api/reviews')
                ]
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'error' => 'Report tidak ditemukan.'
            ], 404);
        }
    }

    public function index()
    {
        $reports = Report::all();

        return response()->json([
            'data' => $reports,
            'links' => [
                'create_report' => url('/api/reports'),
            ]
        ]);
    }
    // CREATE - Membuat ulasan baru
    public function storeReview(Request $request)
    {
        $request->validate([
            'report_id' => 'required|exists:reports,id',
            'review' => 'required|string|max:1000',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $review = new Review();
        $review->report_id = $request->input('report_id');
        $review->review = $request->input('review');
        $review->rating = $request->input('rating');
        $review->save();

        return response()->json([
            'message' => 'Ulasan berhasil dibuat.',
            'data' => [
                'id' => $review->id,
                'review' => $review->review,
                'rating' => $review->rating,
                'links' => [
                    'self' => url("/api/reviews/{$review->id}"),
                    'delete_review' => url("/api/reviews/{$review->id}"),
                    'report' => url("/api/reports/{$review->report_id}")
                ]
            ],
            'links' => [
                'create_review' => url('/api/reviews'),
                'report_reviews' => url('/api/reports/' . $review->report_id . '/reviews')
            ]
        ], 201);
    }

    // DELETE - Menghapus ulasan berdasarkan ID
    public function deleteReview($id)
    {
        try {
            $review = Review::findOrFail($id);
            $review->delete();

            return response()->json([
                'message' => 'Ulasan berhasil dihapus.',
                'links' => [
                    'create_review' => url('/api/reviews'),
                    'report_reviews' => url('/api/reports/' . $review->report_id . '/reviews')
                ]
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'error' => 'Ulasan tidak ditemukan.'
            ], 404);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Terjadi kesalahan saat menghapus ulasan.'
            ], 500);
        }
    }
}