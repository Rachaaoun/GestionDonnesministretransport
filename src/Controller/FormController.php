<?php

namespace App\Controller;

use PhpOffice\PhpWord\PhpWord;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use PhpOffice\PhpWord\IOFactory;

use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class FormController extends AbstractController
{
    /**
     * @Route("/form2", name="form2")
     */
    public function index(): Response
    {
        $phpWord = new PhpWord();

        $section = $phpWord->addSection();
        $section->addText(
            'من الرئيس المدير العام لشركة النقل بتونس إلى '
            . ' '
            . 'السيد المدير العام للمرصد الوطني للصفقات العمومية   '
            , array('name' => 'Times New Roman', 'size' => 22, 'police' => 'gras', 'position' => 'center')
        );
        $section->addText(
            '.الموضوع :   بطاقة بيانات خاصة بالصفقات العمومية  '
            , array('name' => 'Times New Roman', 'size' => 16, 'police' => 'gras')
        );

        $section->addText(
            'وبعد تبعا لقرار السيد رئيس الحكومة  المؤرخ في ...........المتعلق بضبط  '
            . 'إجراءات مسك السجل المعلوماتي  وبطاقة المتابعة وقائمة ونماذج المعطيات التي يتطلّبها '
            . 'إحصاء الصفقات العمومية وطرق وآجال تجميعها، يشرفني موافاتكم بنموذج  الملحق عدد"2"  '

            , array('name' => 'Times New Roman', 'size' => 16, 'police' => 'gras')
        );

        $section->addText('المتعلق  ببطاقة بيانات حول الصفقات التي تمّت المصادقة عليها من قبل مجلس الإدارة. '

            , array('name' => 'Times New Roman', 'size' => 16)
        );
        $section->addText('الرئيس المدير العام 
                                              أنيس الملولشي 
'
            , array('name' => 'Times New Roman', 'size' => 16, 'position' => 'center'));

        $objWriter = IOFactory::createWriter($phpWord, 'Word2007');

        // Create a temporal file in the system
        $fileName = 'بطاقة بيانات نموذج عدد 2.docx';
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);

        // Write in the temporal filepath
        $objWriter->save($temp_file);

        $response = new BinaryFileResponse($temp_file);
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            $fileName
        );

        return $response;

    }


    /**
     * @Route("/form3", name="form3")
     */
    public function index3(): Response
    {
        $phpWord = new PhpWord();

        $section = $phpWord->addSection();
        $section->addText(
            'من الرئيس المدير العام لشركة النقل بتونس إلى '
            . ' '
            . 'السيد المدير العام للمرصد الوطني للصفقات العمومية   '
            , array('name' => 'Times New Roman', 'size' => 22, 'police' => 'gras', 'position' => 'center')
        );
        $section->addText(
            '.الموضوع :   بطاقة بيانات خاصة بالصفقات العمومية  '
            , array('name' => 'Times New Roman', 'size' => 16, 'police' => 'gras')
        );

        $section->addText(
            'وبعد تبعا لقرار السيد رئيس الحكومة  المؤرخ في ...........المتعلق بضبط  '
            . 'إجراءات مسك السجل المعلوماتي  وبطاقة المتابعة وقائمة ونماذج المعطيات التي يتطلّبها '
            . 'إحصاء الصفقات العمومية وطرق وآجال تجميعها، يشرفني موافاتكم بنموذج  الملحق عدد"3"  '

            , array('name' => 'Times New Roman', 'size' => 16, 'police' => 'gras')
        );

        $section->addText('المتعلق  ببطاقة بيانات حول الصفقات التي تمّت المصادقة عليها من قبل مجلس الإدارة. '

            , array('name' => 'Times New Roman', 'size' => 16)
        );
        $section->addText('الرئيس المدير العام 
                                              أنيس الملولشي 
'
            , array('name' => 'Times New Roman', 'size' => 16, 'position' => 'center'));

        $objWriter = IOFactory::createWriter($phpWord, 'Word2007');

        // Create a temporal file in the system
        $fileName = 'بطاقة بيانات نموذج عدد 2.docx';
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);

        // Write in the temporal filepath
        $objWriter->save($temp_file);

        $response = new BinaryFileResponse($temp_file);
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            $fileName
        );

        return $response;

    }


    /**
     * @Route("/form5", name="form5")
     */
    public function index5(): Response
    {
        $phpWord = new PhpWord();

        $section = $phpWord->addSection();
        $section->addText(
            'من الرئيس المدير العام لشركة النقل بتونس إلى '
            . ' '
            . 'السيد المدير العام للمرصد الوطني للصفقات العمومية   '
            , array('name' => 'Times New Roman', 'size' => 22, 'police' => 'gras', 'position' => 'center')
        );
        $section->addText(
            '.الموضوع :   بطاقة بيانات خاصة بالصفقات العمومية  '
            , array('name' => 'Times New Roman', 'size' => 16, 'police' => 'gras')
        );

        $section->addText(
            'وبعد تبعا لقرار السيد رئيس الحكومة  المؤرخ في ...........المتعلق بضبط  '
            . 'إجراءات مسك السجل المعلوماتي  وبطاقة المتابعة وقائمة ونماذج المعطيات التي يتطلّبها '
            . 'إحصاء الصفقات العمومية وطرق وآجال تجميعها، يشرفني موافاتكم بنموذج  الملحق عدد"5"  '

            , array('name' => 'Times New Roman', 'size' => 16, 'police' => 'gras')
        );

        $section->addText('المتعلق  ببطاقة بيانات حول الصفقات التي تمّت المصادقة عليها من قبل مجلس الإدارة. '

            , array('name' => 'Times New Roman', 'size' => 16)
        );
        $section->addText('الرئيس المدير العام 
                                              أنيس الملولشي 
'
            , array('name' => 'Times New Roman', 'size' => 16, 'position' => 'center'));

        $objWriter = IOFactory::createWriter($phpWord, 'Word2007');

        // Create a temporal file in the system
        $fileName = 'بطاقة بيانات نموذج عدد 2.docx';
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);

        // Write in the temporal filepath
        $objWriter->save($temp_file);

        $response = new BinaryFileResponse($temp_file);
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            $fileName
        );

        return $response;

    }

    /**
     * @Route("/invitation", name="invitation")
     */
    public function invitation(): Response
    {
        $phpWord = new PhpWord();

        $section = $phpWord->addSection();
        $section->addText(
            'ل.د.م.ص عـ07/2020 ـدد ' , array('name' => 'Times New Roman', 'size' => 22, 'police' => 'gras', 'position' => 'center'));
        $section->addText(

            ' '
            . 'السّيدة 
منية الحبايري
  '
            , array('name' => 'Times New Roman', 'size' => 22, 'police' => 'gras', 'position' => 'center')
        );
        $section->addText(
            'الموضوع: انعقاد جلسة اللجنة الداخلية لمراقبة الصفقات يوم الاثنين 19 أكتوبر 2020.  '
            , array('name' => 'Times New Roman', 'size' => 16, 'police' => 'gras')
        );

        $section->addText(
            'سيّدتي ،
	يشرفني دعوتكم لحضور جلسة اللجنة الداخلية لمراقبة الصفقات التي ستنعقد يوم الاثنين 19 أكتوبر 2020 على الساعة التاسعة صباحا بالمقر الإجتماعي للشركة الكائن، 33 شارع اليابان مونبليزير- تونس.
     وسيقع النظر في الملف المدرج بجدول الأعمال التكميلي.
     وتفضلي سيّدتي، بقبول أسمى عبارات الشكر والتقدير.

'

            , array('name' => 'Times New Roman', 'size' => 16, 'police' => 'gras')
        );

        $section->addText('اسيّدتي ،
	يشرفني دعوتكم لحضور جلسة اللجنة الداخلية لمراقبة الصفقات التي ستنعقد يوم الاثنين 19 أكتوبر 2020 على الساعة التاسعة صباحا بالمقر الإجتماعي للشركة الكائن، 33 شارع اليابان مونبليزير- تونس.
     وسيقع النظر في الملف المدرج بجدول الأعمال التكميلي.
     وتفضلي سيّدتي، بقبول أسمى عبارات الشكر والتقدير.

 '

            , array('name' => 'Times New Roman', 'size' => 16, 'position' => 'center')
        );

        $objWriter = IOFactory::createWriter($phpWord, 'Word2007');

        // Create a temporal file in the system
        $fileName = 'دعوة.docx';
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);

        // Write in the temporal filepath
        $objWriter->save($temp_file);

        $response = new BinaryFileResponse($temp_file);
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            $fileName
        );

        return $response;

    }


    /**
     * @Route("/tableauaffaire", name="tableauaffaire")
     */
    public function tableauAffaire(): Response
    {
        $phpWord = new PhpWord();

        $section = $phpWord->addSection();
        $section->addText(
            'جدول أعمال اللجنة الداخلية لمراقبة الصفقات '
            .''
            .'عـــ 07/2020 ـــدد'
            .''
            .'جلسة يوم الاثنين 19 أكتوبر 2020 على الساعة التاسعة صباحا بالمقر الاجتماعي للشركة، 33 شارع اليابان مونبليزير تونس.'
            , array('name' => 'Times New Roman', 'size' => 22, 'police' => 'gras', 'position' => 'center'));
        $section->addText(

            ' '
            . '- مذكرة التقديم الخاصة بطلب عروض عدد 06/2020 و المتعلقة بـ:'
            .'″ACQUISITION D’UN LOT DE ROUES MONOBLOCS POUR LES RAMES TGM″'
            .''
            .'تقديم السيّد فتحي بقاني            '
            .''
            .'3- ملف تقرير تقييم العروض المالية والفنية الخاص بطلب العروض عدد 10/2020 المتعلق  بـ:'
            .'«FOURNITURE DES PIECES DE RECHANGES POUR L’ENTRETIEN DU PARC   D’AUTOBUS DE MARQUE VOVO»'
            .''
            .'  تقديم السيّد رشيد والي'
            .'4- ملف تقرير تقييم العروض المالية والفنية الخاص بطلب العروض عدد 11/2020المتعلق  بـ:'
            .''
            .'″TRAVAUX DE RECHAPAGE ET DE REPARATION DES PNEUS TUBELESS″'
            .''
            .'تقديم السيّد مجدي البرقاوي'
            .'5- ملف تقرير تقييم العروض المالية والفنية الخاص بطلب العروض عدد 12/2020المتعلق  بـ:'
            .'″ FOURNITURE DES PIECES DE RECHANGES NEUFS POUR L’ENTRETIEN DU PARC D’AUTOBUS DE MARQUE INTERNATIONAL″'
            .''
            .'      تقديم السيّد رشيد والي'
            , array('name' => 'Times New Roman', 'size' => 16, 'police' => 'gras', 'position' => 'center')
        );
        $section->addText(
            'الموضوع: انعقاد جلسة اللجنة الداخلية لمراقبة الصفقات يوم الاثنين 19 أكتوبر 2020.  '
            , array('name' => 'Times New Roman', 'size' => 16, 'police' => 'gras')
        );

        $section->addText(
            'سيّدتي ،
	يشرفني دعوتكم لحضور جلسة اللجنة الداخلية لمراقبة الصفقات التي ستنعقد يوم الاثنين 19 أكتوبر 2020 على الساعة التاسعة صباحا بالمقر الإجتماعي للشركة الكائن، 33 شارع اليابان مونبليزير- تونس.
     وسيقع النظر في الملف المدرج بجدول الأعمال التكميلي.
     وتفضلي سيّدتي، بقبول أسمى عبارات الشكر والتقدير.

'

            , array('name' => 'Times New Roman', 'size' => 16, 'police' => 'gras')
        );

        $section->addText('اسيّدتي ،
	يشرفني دعوتكم لحضور جلسة اللجنة الداخلية لمراقبة الصفقات التي ستنعقد يوم الاثنين 19 أكتوبر 2020 على الساعة التاسعة صباحا بالمقر الإجتماعي للشركة الكائن، 33 شارع اليابان مونبليزير- تونس.
     وسيقع النظر في الملف المدرج بجدول الأعمال التكميلي.
     وتفضلي سيّدتي، بقبول أسمى عبارات الشكر والتقدير.

 '

            , array('name' => 'Times New Roman', 'size' => 16, 'position' => 'center')
        );

        $objWriter = IOFactory::createWriter($phpWord, 'Word2007');

        // Create a temporal file in the system
        $fileName = 'جدول اعمال لدمص.docx';
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);

        // Write in the temporal filepath
        $objWriter->save($temp_file);

        $response = new BinaryFileResponse($temp_file);
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            $fileName
        );

        return $response;

    }

    /**
     * @Route("/form2_index", name="forme2_index")
     * @return Response
     */
    public function form2():Response
    {
        return $this->render('form/form2.html.twig',[

        ]);

    }

    /**
     * @Route("/form3_index", name="forme3_index")
     * @return Response
     */
    public function form3():Response
    {
        return $this->render('form/form3.html.twig',[

        ]);

    }

    /**
     * @Route("/form5_index", name="forme5_index")
     * @return Response
     */
    public function form5():Response
    {
        return $this->render('form/form5.html.twig',[

        ]);

    }
    /**
     * @Route("/tableAffaire", name="table_affaire")
     * @return Response
     */
    public function tableAffaire():Response
    {
        return $this->render('form/tableAffaire.html.twig',[

        ]);

    }

    /**
     * @Route("/invitationPage", name="invitation_page")
     * @return Response
     */
    public function invitationPage():Response
    {
        return $this->render('form/invitation.html.twig',[

        ]);

    }
     /**
     * @Route("/observatoiree2", name="observatoire2_page")
     * @return Response
     */
    public function observatoire2():Response
    {
        return $this->render('form/observatoire2.html.twig',[

        ]);

    }


    /**
     * @Route("/carte", name="carte")
     * @return Response
     */
    public function Carte():Response
    {
        return $this->render('form/bitakatbayenet.html.twig',[

        ]);

    }

    /**
     * @Route("/tab_form5_index", name="tab_forme5_index")
     * @return Response
     */
    public function tabForm5():Response
    {
        return $this->render('form/tab_form5.html.twig',[

        ]);

    }

}
