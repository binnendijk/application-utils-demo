<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use ApplicationUtils\Barcode\QrCode,
    ApplicationUtils\Barcode\QrCode\Renderer\GoogleChartsRenderer;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        // crude demo usage //
        header('Content-type: application/png');
        $qrCode = new QrCode('http://alin.purcaru.com', 50, 50); // text, width, height
        $qrCode->setRenderer(new GoogleChartsRenderer());
        $qrCodeData = $qrCode->generate(); // should return the image data, not the URL
        exit ($qrCodeData);
    }
}
