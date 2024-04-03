<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;
use OpenApi\Attributes as OA;

class ConferenceController extends Controller
{
    public function index(): mixed
    {
        $conferences = Conference::get();
        return $conferences;
    }
    #[OA\Get(
        path: '/conference/store',
        responses: [
            new OA\Response(response: 200, description: 'OK'),
            new OA\Response(response: 401, description: 'Not allowed'),
        ]
    )]
    public function store(Request $request): string
    {
        return $request . "store";
    }
    public function show(Conference $conference): string
    {
        return $conference . "show";
    }
    public function update(Request $request, Conference $conference): string
    {
        return $request . $conference . "update";
    }
}
