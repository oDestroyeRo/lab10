<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);

        App\Bitcoin::create([
            'coin' => 'XRP',
            'price' => '0.00003919',
            'name' => 'Ripple']);
        App\Bitcoin::create([
            'coin' => 'ETH',
            'price' => '0.05693300',
            'name' => 'Etheruem']);
        App\Bitcoin::create([
            'coin' => 'ETC',
            'price' => '0.00472823',
            'name' => 'Etheruem Classic']);
        App\Bitcoin::create([
            'coin' => 'LTC',
            'price' => '0.01167774',
            'name' => 'Litecoin']);
        App\Bitcoin::create([
            'coin' => 'GNT',
            'price' => '0.00015498',
            'name' => 'Golem']);
        App\Bitcoin::create([
            'coin' => 'DASH',
            'price' => '0.06984700',
            'name' => 'Dash']);
        App\Bitcoin::create([
            'coin' => 'ZEC',
            'price' => '0.06974595',
            'name' => 'Zcash']);
        App\Bitcoin::create([
            'coin' => 'XMR',
            'price' => '0.01750846',
            'name' => 'Monero']);
        App\Bitcoin::create([
            'coin' => 'XEM',
            'price' => '0.00003759',
            'name' => 'NEM']);
        App\Bitcoin::create([
            'coin' => 'FCT',
            'price' => '0.00591356',
            'name' => 'Factom']);
        App\Bitcoin::create([
            'coin' => 'DOGE',
            'price' => '0.00000054',
            'name' => 'Dogecoin']);
        App\Bitcoin::create([
            'coin' => 'DCR',
            'price' => '0.01135000',
            'name' => 'Decred']);
        App\Bitcoin::create([
            'coin' => 'STR',
            'price' => '0.00000364',
            'name' => 'Stellar']);


        App\Ethereum::create([
            'coin' => 'GNT',
            'price' => '0.00276519',
            'name' => 'Golem']);
        App\Ethereum::create([
            'coin' => 'ETC',
            'price' => '0.08433560',
            'name' => 'Etheruem Classic']);
        App\Ethereum::create([
            'coin' => 'REP',
            'price' => '0.21385069',
            'name' => 'Augur']);
        App\Ethereum::create([
            'coin' => 'ZEC',
            'price' => '1.1801005',
            'name' => 'Zcash']);
        App\Ethereum::create([
            'coin' => 'LSK',
            'price' => '0.00748856',
            'name' => 'Lisk']);
        App\Ethereum::create([
            'coin' => 'STEEM',
            'price' => '0.00354429',
            'name' => 'STEEM']);

        App\Monero::create([
            'coin' => 'ZEC',
            'price' => '3.95099430',
            'name' => 'Zcash']);
        App\Monero::create([
            'coin' => 'LTC',
            'price' => '0.66946596',
            'name' => 'Litecoin']);
        App\Monero::create([
            'coin' => 'DASH',
            'price' => '3.90000000',
            'name' => 'Dash']);
        App\Monero::create([
            'coin' => 'MAID',
            'price' => '0.01063178',
            'name' => 'MaidSafeCoin']);
        App\Monero::create([
            'coin' => 'NXT',
            'price' => '0.00134742',
            'name' => 'NXT']);
        App\Monero::create([
            'coin' => 'BLK',
            'price' => '0.00651832',
            'name' => 'BlockCoin']);
        App\Monero::create([
            'coin' => 'BTCD',
            'price' => '0.37652151',
            'name' => 'BitcoinDark']);
        App\Monero::create([
            'coin' => 'BCN',
            'price' => '0.00000865',
            'name' => 'Bytecoin']);
        App\Monero::create([
            'coin' => 'BBR',
            'price' => '0.00668318',
            'name' => 'Boolberry']);
        App\Monero::create([
            'coin' => 'QORA',
            'price' => '0.00000159',
            'name' => 'Qora']);

        App\Dollar::create([
            'coin' => 'BTC',
            'price' => '1444.01153896',
            'name' => 'Bitcoin']);
        App\Dollar::create([
            'coin' => 'ETH',
            'price' => '83.56684694',
            'name' => 'Ethereum']);
        App\Dollar::create([
            'coin' => 'ETC',
            'price' => '6.83806526',
            'name' => 'Ethereum Classic']);
        App\Dollar::create([
            'coin' => 'XRP',
            'price' => '0.05453010',
            'name' => 'Ripple']);
        App\Dollar::create([
            'coin' => 'LTC',
            'price' => '16.71390015',
            'name' => 'Litecoin']);
        App\Dollar::create([
            'coin' => 'ZEC',
            'price' => '101.35999921',
            'name' => 'Zcash']);
        App\Dollar::create([
            'coin' => 'DASH',
            'price' => '97.00000000',
            'name' => 'Dash']);
        App\Dollar::create([
            'coin' => 'XMR',
            'price' => '24.75000000',
            'name' => 'Monero']);
        App\Dollar::create([
            'coin' => 'REP',
            'price' => '18.18522500',
            'name' => 'Augur']);
        App\Dollar::create([
            'coin' => 'STR',
            'price' => '0.00532856',
            'name' => 'Stellar']);
        App\Dollar::create([
            'coin' => 'NXT',
            'price' => '0.03400000',
            'name' => 'NXT']);



        // $singer = App\Singer::where('name', '=', 'Maroon 5')->first();
        // if (!is_null($singer)) {
        //     $singer->albums()->saveMany([
        //         new App\Album(['name' => 'Songs About Jane']),
        //         new App\Album(['name' => "It Won't Be Soon Before Long"]),
        //         new App\Album(['name' => 'The B-Side Collection']),
        //         new App\Album(['name' => 'Hands All Over']),
        //         new App\Album(['name' => 'Overexposed']),
        //         new App\Album(['name' => 'V'])
        //     ]);
        //
        //     $album = App\Album::where('name', '=', 'Songs About Jane')->first();
        //     $album->songs()->saveMany([
        //         new App\Song([
        //             'name' => "This Love",
        //             'lyric' => "Lyric ... (This Love)"
        //         ]),
        //         new App\Song([
        //             'name' => 'She Will Be Loved',
        //             'lyric' => 'Lyric ... (She Will Be Loved)'
        //         ]),
        //         new App\Song([
        //             'name' => "Not Coming Home",
        //             'lyric' => "Lyric ... (Not Coming Home)"
        //         ]),
        //     ]);
        //
        //     $album = App\Album::where('name', '=' , 'Hands All Over')->first();
        //     $album->songs()->saveMany([
        //         new App\Song([
        //             'name' => "If I Ain't Got You",
        //             'lyric' => "Lyric ... (If I Ain't Got You)"
        //         ]),
        //         new App\Song([
        //             'name' => 'Runaway',
        //             'lyric' => 'Lyric ... (Runaway)'
        //         ]),
        //         new App\Song([
        //             'name' => "Don't Know Nothing",
        //             'lyric' => "Lyric ... (Don't Know Nothing)"
        //         ]),
        //     ]);
        // }

    }
}
