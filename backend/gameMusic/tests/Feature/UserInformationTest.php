<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

// モデル
use App\User;
use App\UserInformation;

class UserInformationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */

    //  モデルのテスト
    public function testFactoryable()
    {
        $eloquent = app(UserInformation::class);
        $this->assertEmpty($eloquent->get());
        $entity = factory(UserInformation::class)->create();
        $this->assertNotEmpty($eloquent->get());
    }

    // リレーションテスト
    public function testUserInformationBelongsToUser()
    {
        $userEloquent = app(User::class);
        $userInformationEloquent = app(UserInformation::class);

        // ユーザー作成
        $user = factory(User::class)->create();

        // ユーザーインフォ作成
        $userInformation = factory(UserInformation::class)->create([
            'user_id' => $user->id,
        ]);
        $this->assertNotEmpty($userInformation->user);
    }

    public function testLoginUserInformation()
    {
        // ユーザー作成
        $user = factory(User::class)->create();

        // ユーザーインフォ作成
        $userInformation = factory(UserInformation::class)->create([
            'user_id' => $user->id,
        ]);

        // actingAsでログイン認証したのちAPI通信
        $response = $this->actingAs($user)
                         ->json('GET', route('loginUserInformation'));

        $response
            ->assertStatus(200)
            ->assertJson(['message' => '成功',]);
    }




}