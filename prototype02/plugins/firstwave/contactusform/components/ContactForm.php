<?php  namespace  FirstWave\ContactUsForm\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Flash;
use Validator;
use ValidationException;

class ContactForm extends ComponentBase
{

    /**
    * Contact form validation rules.
    * @var array
    */
    public $formValidationRules = [
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required|email:filter',
        'content' => 'required'
    ];

    /**
    * custome messages.
    * @var array
    */
    public $customMessages = [
        'content.required' => 'The message field is required'
    ];

    /**
    * Returns information about this component, including name and description.
    */
    public function componentDetails(){
        return [
            'name' => 'Contact Form',
            'description' => 'Simple Contact Form' 
        ];
    }

    /**
    * AJAX handler called after the contact form has been submitted.
    *
    */
    public function onSubmitContactForm(){

        // Build the validator
        $validator = Validator::make(post(), $this->formValidationRules, $this->customMessages);

        if($validator->fails()){
            throw new ValidationException($validator);
        }

        // If everything is fine - send an email and save data to the backend
        Mail::send('firstwave.contactusform::mail.contact',post(), function($message){
            $message->to('sales@firstwave.sg','First Wave Agency');
            $message->subject(Input::get('firstname').' '.Input::get('lastname').' - Contacted Us');
        }); 

        Flash::success('The '.Input::get('subject').' Email was sent successfully!');
    }

    /**
    * Load frontend assets.
    *
    */
    public function onRun(){
        $this->addCss('assets/css/style.css');
        $this->addJs('assets/js/script.js');
    }

    public function siteKey(){
        return Settings::get('site_key');
    }
}