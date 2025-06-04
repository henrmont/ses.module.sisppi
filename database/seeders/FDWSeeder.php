<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FDWSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $extension = 'CREATE EXTENSION postgres_fdw;';
        DB::unprepared($extension);
        $sql = 'CREATE SERVER core FOREIGN DATA WRAPPER postgres_fdw OPTIONS (host \'localhost\', dbname \'ses.core\');';
        $sql .= 'CREATE USER MAPPING FOR postgres SERVER core OPTIONS (user \'postgres\', password \'postgres\');';
        $sql .= 'IMPORT FOREIGN SCHEMA public LIMIT TO (users,password_reset_tokens,sessions,personal_access_tokens,permissions,roles,model_has_permissions,model_has_roles,role_has_permissions,modules,module_users,counties,health_regions) FROM SERVER core INTO public;';
        DB::unprepared($sql);
        unset($sql);
        $sql = 'CREATE SERVER sigtap FOREIGN DATA WRAPPER postgres_fdw OPTIONS (host \'localhost\', dbname \'ses.sigtap\');';
        $sql .= 'CREATE USER MAPPING FOR postgres SERVER sigtap OPTIONS (user \'postgres\', password \'postgres\');';
        $sql .= 'IMPORT FOREIGN SCHEMA public LIMIT TO (competences,groups,subgroups,organization_forms,modalities,financings,procedures,procedure_modalities) FROM SERVER sigtap INTO public;';
        DB::unprepared($sql);
    }
}
