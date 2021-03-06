<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

// モデル
use App\UseMaster;
use App\InstrumentMaster;
use App\SoundMaster;
use App\UnderstaindingMaster;

class SoundTypeController extends Controller
{
    // サウンド一覧を取得
    public function sound() {
        try{
            $sounds = SoundMaster::all();

            return response()->json([
                'message' => '成功',
                'sounds' => $sounds
            ], 200);
        }
        catch (\Exception $e) {
            return response()->json([
                'message' => '失敗',
                'errorInfo' => $e
            ],500);
        }
    }
    // イメージ一覧を取得
    public function understanding() {
        try{
            $understandings = UnderstaindingMaster::all();

            return response()->json([
                'message' => '成功',
                'understandings' => $understandings
            ], 200);
        }
        catch (\Exception $e) {
            return response()->json([
                'message' => '失敗',
                'errorInfo' => $e
            ],500);
        }
    }
    // use一覧を取得
    public function use() {
        try{
            $uses = UseMaster::all();

            return response()->json([
                'message' => '成功',
                'uses' => $uses
            ], 200);
        }
        catch (\Exception $e) {
            return response()->json([
                'message' => '失敗',
                'errorInfo' => $e
            ],500);
        }
    }
    // instrument一覧を取得
    public function instrument() {
        try{
            $instruments = InstrumentMaster::all();

            return response()->json([
                'message' => '成功',
                'instruments' => $instruments
            ], 200);
        }
        catch (\Exception $e) {
            return response()->json([
                'message' => '失敗',
                'errorInfo' => $e
            ],500);
        }
    }
}
