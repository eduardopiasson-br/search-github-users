<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SearchUsers extends Controller
{
    /**
     * Search users in github repository
     * 
     * @param  \Illuminate\Http\Request $request
     */
    public function searchPhp(Request $request)
    {
        try {
            $url = 'https://api.github.com/search/users?q=' . $request->search;
            $headers = [
                'User-Agent: https://api.github.com/meta',
                'Accept: application/vnd.github+json',
                'X-GitHub-Api-Version: 2022-11-28',
            ];

            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            $data = curl_exec($curl);
            // dd(curl_error($curl)); inspecionar possíveis erros no curl method
            curl_close($curl);

            Session::flash('success', 'Pesquisa realizada com sucesso!');
            return view('users-list', ['users' => json_decode($data)->items, 'search' => $request->search]);
        } catch (Exception $e) {
            Session::flash('error', 'Ouve um problema na pesquisa...');
            return view('index');
        }
    }
}
