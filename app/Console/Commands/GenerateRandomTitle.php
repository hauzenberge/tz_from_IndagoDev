<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Support\Facades\DB;
use App\Models\Note;

class GenerateRandomTitle extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-random-title';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a random title for notes';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        DB::transaction(function () {
            $notes = Note::all();

            foreach ($notes as $note) {
                // Генерація нового случайного заголовка для кожної замітки
                $newTitle = $this->generateRandomTitle();

                // Оновлення заголовка замітки
                $note->update(['title' => $newTitle]);

                $this->info("Updated title for note #{$note->id}: $newTitle");
            }
        });
    }

    private function generateRandomTitle()
    {
        // Логіка для генерації нового случайного заголовка
        // Ваш код для генерації заголовка, наприклад, використовуючи Faker

        return \Faker\Factory::create()->sentence;
    }
}
