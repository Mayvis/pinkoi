<?php

namespace Tests\Feature;

use App\Banner;
use App\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BannerTest extends TestCase
{
    use RefreshDatabase, withFaker;

    /** @test */
    public function only_administrators_can_upload_banner()
    {
        // 非admin使用者登入
        $user = factory(User::class)->create();
        $this->actingAs($user);

        $this->post('/api/banners', [])
            ->assertRedirect(route('login'));
    }

    /** @test */
    public function a_valid_banner_must_be_provided()
    {
        // admin使用者登入
        $this->administrator_sign_in();

        $this->json('POST', '/api/banners', [
            'banner_path' => 'not-an-image'
        ])->assertStatus(422);
    }

    /** @test */
    public function administrators_can_upload_banner()
    {
        $this->withoutExceptionHandling();

        $administrator = $this->administrator_sign_in();

        $this->assertTrue($administrator->isAdmin());

        // fake storage
        Storage::fake('public');

        // 上傳banner
        $this->json('POST', '/api/banners', [
            'banner' => $file = UploadedFile::fake()->image('banner.jpg')
        ]);

        // 檢查是否上傳成功
        $this->assertEquals('banners/' . $file->hashName(), Banner::pluck('banner_path')->first());

        // 是否檔案存在
        Storage::disk('public')->assertExists('banners/' . $file->hashName());
    }

    protected function administrator_sign_in()
    {
        // admin使用者登入
        return tap(factory(User::class)->create(['email' => 'liangyu@test.com']), function ($administrator) {
            $this->actingAs($administrator);
        });
    }
}
