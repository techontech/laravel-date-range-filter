<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = [
            [
                "id" => 1,
                "name" => 'Student 1',
                "standard" => '5',
                "percentage" => '90',
                "result" => 'pass',
                "created_at" => '2020-01-09'
            ],
            [
                "id" => 2,
                "name" => 'Student 2',
                "standard" => '5',
                "percentage" => '85',
                "result" => 'pass',
                "created_at" => '2020-02-15'
            ],
            [
                "id" => 3,
                "name" => 'Student 3',
                "standard" => '5',
                "percentage" => '65',
                "result" => 'pass',
                "created_at" => '2020-03-01'
            ],
            [
                "id" => 4,
                "name" => 'Student 4',
                "standard" => '5',
                "percentage" => '34',
                "result" => 'fail',
                "created_at" => '2020-04-24'
            ],
            [
                "id" => 5,
                "name" => 'Student 5',
                "standard" => '6',
                "percentage" => '84',
                "result" => 'pass',
                "created_at" => '2020-01-11'
            ],
            [
                "id" => 6,
                "name" => 'Student 6',
                "standard" => '6',
                "percentage" => '56',
                "result" => 'pass',
                "created_at" => '2020-02-23'
            ],
            [
                "id" => 7,
                "name" => 'Student 7',
                "standard" => '6',
                "percentage" => '73',
                "result" => 'pass',
                "created_at" => '2020-03-04'
            ],
            [
                "id" => 8,
                "name" => 'Student 8',
                "standard" => '6',
                "percentage" => '26',
                "result" => 'fail',
                "created_at" => '2020-04-28'
            ],
            [
                "id" => 9,
                "name" => 'Student 9',
                "standard" => '7',
                "percentage" => '75',
                "result" => 'pass',
                "created_at" => '2020-01-12'
            ],
            [
                "id" => 10,
                "name" => 'Student 10',
                "standard" => '7',
                "percentage" => '91',
                "result" => 'pass',
                "created_at" => '2020-02-06'
            ],
            [
                "id" => 11,
                "name" => 'Student 11',
                "standard" => '7',
                "percentage" => '45',
                "result" => 'pass',
                "created_at" => '2020-03-21'
            ],
            [
                "id" => 12,
                "name" => 'Student 12',
                "standard" => '7',
                "percentage" => '33',
                "result" => 'fail',
                "created_at" => '2020-04-14'
            ],
            [
                "id" => 13,
                "name" => 'Student 13',
                "standard" => '8',
                "percentage" => '81',
                "result" => 'pass',
                "created_at" => '2020-01-29'
            ],
            [
                "id" => 14,
                "name" => 'Student 14',
                "standard" => '8',
                "percentage" => '49',
                "result" => 'pass',
                "created_at" => '2020-02-22'
            ],
            [
                "id" => 15,
                "name" => 'Student 15',
                "standard" => '8',
                "percentage" => '63',
                "result" => 'pass',
                "created_at" => '2020-03-10'
            ],
            [
                "id" => 16,
                "name" => 'Student 16',
                "standard" => '8',
                "percentage" => '31',
                "result" => 'fail',
                "created_at" => '2020-04-26'
            ],
            [
                "id" => 17,
                "name" => 'Student 17',
                "standard" => '9',
                "percentage" => '90',
                "result" => 'pass',
                "created_at" => '2020-01-17'
            ],
            [
                "id" => 18,
                "name" => 'Student 18',
                "standard" => '9',
                "percentage" => '83',
                "result" => 'pass',
                "created_at" => '2020-02-01'
            ],
            [
                "id" => 19,
                "name" => 'Student 19',
                "standard" => '9',
                "percentage" => '67',
                "result" => 'pass',
                "created_at" => '2020-03-19'
            ],
            [
                "id" => 20,
                "name" => 'Student 20',
                "standard" => '9',
                "percentage" => '29',
                "result" => 'fail',
                "created_at" => '2020-04-21'
            ],
            [
                "id" => 21,
                "name" => 'Student 21',
                "standard" => '10',
                "percentage" => '75',
                "result" => 'pass',
                "created_at" => '2020-01-15'
            ],
            [
                "id" => 22,
                "name" => 'Student 22',
                "standard" => '10',
                "percentage" => '67',
                "result" => 'pass',
                "created_at" => '2020-02-25'
            ],
            [
                "id" => 23,
                "name" => 'Student 23',
                "standard" => '10',
                "percentage" => '78',
                "result" => 'pass',
                "created_at" => '2020-03-17'
            ],
            [
                "id" => 24,
                "name" => 'Student 24',
                "standard" => '10',
                "percentage" => '30',
                "result" => 'fail',
                "created_at" => '2020-04-23'
            ],
        ];

        Student::insert($students);
    }
}
