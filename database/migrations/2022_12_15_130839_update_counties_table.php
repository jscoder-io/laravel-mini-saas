<?php

use App\Models\County;
use App\Models\State;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->parse('georef.csv', function ($value) {
            $state = State::firstWhere('name', $value['state']);
            if ($state) {
                unset($value['state'], $value['state_code']);
                $value['state_id'] = $state->id;
                (new County($value))->save();
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }

    protected function parse(string $filename, Closure $callback = null)
    {
        $results = [];
        if (($handle = fopen(database_path($filename), 'r')) !== false) {
            $header = false;
            while (($data = fgetcsv($handle, 1000, ',')) !== false) {
                if ($header === false) {
                    $header = $data;
                } else {
                    $row = collect($header)->combine($data)->all();
                    if ($callback) {
                        $callback($row);
                    } else {
                        $results[] = $row;
                    }
                }
            }
            fclose($handle);
        }

        return $results;
    }
};
