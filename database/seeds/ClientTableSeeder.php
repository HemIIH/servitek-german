<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $notes = [
            1 => 'Kunde hat ...',
            2 => 'Kunde hat ...',
            3 => 'Kunde hat ...',
            4 => 'Kunde hat ...',
            5 => 'Kunde hat ...'
        ];

        factory(App\Models\Client\Client::class, 20)->create()->each(function($client) {
            $client->contacts()->saveMany(factory(\App\Models\Client\Contact::class, 2)->make());

            $client->rates()->save(factory(\App\Models\Client\ChargeRate::class)->make());

            $client->invoiceData()->save(factory(\App\Models\Client\InvoiceData::class)->make());
        });

        for ($i = 1; $i <= 5; $i++) {
            \App\Models\Client\Client::find($i)->notes()->save(factory(App\Models\Note::class)->make(['information' => $notes[$i]]));
        }
    }
}
