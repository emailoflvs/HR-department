<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(FiliationsTable::class);
//        $this->call(HrActionContactResultsTable::class);
//        $this->call(HrActionsTable::class);
        $this->call(HrActionTypesTable::class);
//        $this->call(HrAdvertisingTable::class);
        $this->call(HrInfoSourcesTable::class);
        $this->call(HrMessengersTable::class);
        $this->call(HrInviteRefusingReasonsTable::class);
        $this->call(HrInviteClarificationsTable::class);
        $this->call(HrSpecializationsTable::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(PlanFactsTable::class);
        $this->call(TimetablesTable::class);
        $this->call(WorkingStatusSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(HrActionContactResultsTable::class);
        $this->call(HrPeopleTable::class);
        $this->call(HrInterviewReasonsTable::class);
        $this->call(HrEmploymentRulesTable::class);
        $this->call(HrWorkTermTable::class);
        $this->call(HrDesiredSalaryTable::class);
        $this->call(HrAnswersTable::class);
        $this->call(HrQuestionsTable::class);
        $this->call(HrPersonDocumentsTable::class);
        $this->call(HrPersonStatusesTable::class);
        $this->call(HrСompTechnicalRequirementsTable::class);
        $this->call(ApplicationFormsTable::class);

    }
}
