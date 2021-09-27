<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplicationForm extends Model
{

    /**
     * Get the application form list
     * @param intereg $id
     * @var array
     */
    public function getApplicationForms($id = null)
    {
        $applicationForms = [];

        //если не передается id анкеты, то отправляю все
        $DBapplicationForms = ($id) ? ApplicationForm::where('id', $id)->get() :
            ApplicationForm::all();

        if (!empty($DBapplicationForms)) {
            foreach ($DBapplicationForms as $item) {
                $applicationForm = [];
                $applicationForms[$item->vendor_code]['id'] = $item->id;

                $applicationForms[$item->vendor_code]['name'] = $item->name;
                $applicationForms[$item->vendor_code]['vendorCode'] = $item->vendor_code;
                $applicationForms[$item->vendor_code]['details'] = $item->details;

                $applicationForms[$item->vendor_code]['picture'] = $item->picture;
                $applicationForms[$item->vendor_code]['video'] = $item->video;

                $applicationForms[$item->vendor_code]['comments'] = $item->comments;
                $applicationForms[$item->vendor_code]['type'] = $item->type;
                $applicationForms[$item->vendor_code]['status'] = $item->status;
            }
        }

        //переменные со знаком _ меняем на нижний-верхний регистр
        $module = new HelpModule();
        $applicationForms = $module->changeRegisterToTop($applicationForms);

        return $applicationForms;
    }

    /**
     * Get the application edit form
     * @param intereg $id
     * @var array
     */
    public function getEditForm($id = null)
    {
        if (!$id)
            return false;

        $applicationForm = ApplicationForm::find($id);
        $hrQuestions = new HrQuestions();

        //получаем правильно отформатированные вопросы, исходя из вопросов текущей анкеты
        $form['questions'] = $hrQuestions->getQuestions(null, $applicationForm->hrQuestions);
        $form['applicationForm'] = current($this->getApplicationForms($id));

        return $form;
    }

    /**
     * Get the application form by vendor
     * @param intereg $id
     * @var array
     */
    public function getApplicationFormByVendorCode($vendorCode)
    {

        $applicationForm = ApplicationForm::where('vendor_code', $vendorCode)->first();
        $form = current($this->getApplicationForms($applicationForm->id));

        return $form;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function hrQuestions()
    {
        return $this->belongsToMany(HrQuestions::class, 'application_form_hr_question',
            'application_form_id', 'hr_question_id');
    }
}
