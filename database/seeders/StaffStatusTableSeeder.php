<?php

namespace Database\Seeders;

use App\Models\StaffStatus;
use Illuminate\Database\Seeder;

class StaffStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [config('constants.staff_status.already'), '準備中', 1, '前日確認メールがあった場合'],
            [config('constants.staff_status.started'), '接近中', 2, '出勤前で確認メール済の場合、決まった時間に自宅を出ている場合'],
            [config('constants.staff_status.arrived'), '勤務中', 3, ''],
            [config('constants.staff_status.leaved'), '退勤済', 4, ''],
            [config('constants.staff_status.space'), ' ', 5, '未来の場合'],
            [config('constants.staff_status.warning'), '警告(自宅を出てない)', 6, '確認メール等をしてない、決まった時間に自宅を出てない場合'],
        ];
        foreach ($data as $item){
            $model = new StaffStatus();
            $model->id=$item[0];
            $model->name=$item[1];
            $model->sort=$item[2];
            $model->desc=$item[3];
            $model->save();
        }
    }
}