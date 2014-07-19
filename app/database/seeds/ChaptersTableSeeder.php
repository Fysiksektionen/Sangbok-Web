<?php

class ChaptersTableSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    DB::table('chapters')->delete();

    Chapter::insert(array(
      array('id' => 1, 'chapter' => "Αα: Visor till högtid"),
      array('id' => 2, 'chapter' => "Ββ: Visor till gasque"),
      array('id' => 3, 'chapter' => "Γγ: Visor till öl"),
      array('id' => 4, 'chapter' => "Δδ: Visor till destillat"),
      array('id' => 5, 'chapter' => "Εε: Visor till vin"),
      array('id' => 6, 'chapter' => "Ζζ: Visor till punch"),
      array('id' => 7, 'chapter' => "Ηη: Visor till andra drycker"),
      array('id' => 8, 'chapter' => "Θθ: Blöta visor"),
      array('id' => 9, 'chapter' => "Ιι: Torra visor"),
      array('id' => 10, 'chapter' => "Κκ: Fina visor"),
      array('id' => 11, 'chapter' => "Λλ: Vackra visor"),
      array('id' => 12, 'chapter' => "Μμ: Nidvisor"),
      array('id' => 13, 'chapter' => "Νν: Skojiga visor"),
      array('id' => 14, 'chapter' => "Οο: Visor till Fysiker")
    ));
  }

}
