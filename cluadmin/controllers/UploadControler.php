<?php
namespace app\controllers;

class SiteController extends Controller
{
    public function actionUrl()
    {
        $uploadedFile = UploadedFile::getInstanceByName('upload');
        $mime = \yii\helpers\FileHelper::getMimeType($uploadedFile->tempName);
        $file = time()."_".$uploadedFile->name;

        $url = Yii::$app->urlManager->createAbsoluteUrl('/uploads/ckeditor/'.$file);
        $uploadPath = Yii::getAlias('@webroot').'/uploads/ckeditor/'.$file;
        //extensive suitability check before doing anything with the file…
        if ($uploadedFile==null)
        {
           $message = "No file uploaded.";
        }
        else if ($uploadedFile->size == 0)
        {
           $message = "The file is of zero length.";
        }
        else if ($mime!="image/jpeg" && $mime!="image/png")
        {
           $message = "The image must be in either JPG or PNG format. Please upload a JPG or PNG instead.";
        }
        else if ($uploadedFile->tempName==null)
        {
           $message = "You may be attempting to hack our server. We're on to you; expect a knock on the door sometime soon.";
        }
        else {
          $message = "";
          $move = $uploadedFile->saveAs($uploadPath);
          if(!$move)
          {
             $message = "Error moving uploaded file. Check the script is granted Read/Write/Modify permissions.";
          }
        }
        $funcNum = $_GET['CKEditorFuncNum'] ;
        echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($funcNum, '$url', '$message');</script>";
    }
}
?>
