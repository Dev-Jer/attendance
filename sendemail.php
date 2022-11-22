<?php
    require 'vendor/autoload.php';
    class sendEmail{
        public static function SendMail($to, $subject,$content){
            $key = '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';
            $email = new \SendGrid\Mail\Mail();
            $email->setForm("");
            $email->setSubject($subject);
            $email->addTo($to);
            $email->addContent("text/plain", $content);

            $sendgrid = new \SendGrid($key);

            try{
                $response = $sendgrid->send($email);
                return $response;
            }catch(Exception $e){
                echo 'Email Caught exception: '. $e->getMessage() ."\n";
                return false;
            }

        }
    }
?>