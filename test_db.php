<?php

use Illuminate\Support\Facades\DB;

require __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';

$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

// Retrieve an operation from the command line
$operation = $argv[1] ?? null;

// Create
function createUser()
{
    DB::table('users')->insert([
        'name' => 'John Doe',
        'email' => 'johndoe@example.com',
        'password' => bcrypt('password'),
        'created_at' => date(format: 'Y-m-d H:i:s'),
    ]);
    echo "Entry created!\n";
}

// Read
function getUsers()
{
    $users = DB::table('users')->get();
    print_r($users);
}

// Update
function updateUser()
{
    DB::table('users')->where('id', 2)->update([
        'name' => 'Jane Doe',
        'updated_at' => date(format: 'Y-m-d H:i:s')
    ]);
    echo "Entry updated!\n";
}

// Функція для видалення запису (Delete)
function deleteUser()
{
    DB::table('users')->where('id', 1)->delete();
    echo "Entry deleted!\n";
}

switch ($operation) {
    case 'create':
        createUser();
        break;

    case 'read':
        getUsers();
        break;

    case 'update':
        updateUser();
        break;

    case 'delete':
        deleteUser();
        break;

    default:
        echo "Choose a CRUD method: create, read, update, delete\n";
        break;
}
