<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->create(1, [
            'name' => 'admin',
            'email' => 'email@email.com',
        ]);

        $this->create(random_int(5,10));
    }

    /**
     * @param array $data
     * @param int $count
     */
    public function create(int $count, array $data = [])
    {
        //$payment_types = PaymentType::all();
        //$positions = Position::all();

        while ($count) {
            $user = $this->make($data);
            $user->save();
            $count--;
        }
    }

    /**
     * Make User instance filled with given data.
     *
     * @param array $data
     * @return \App\Models\User
     */
    public function make(array $data = []): User
    {
        return factory(User::class)->make($data);
    }
}
