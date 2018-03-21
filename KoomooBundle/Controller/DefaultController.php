<?php
/**
 * Created by PhpStorm.
 * User: jizhang
 * Date: 3/21/2018
 * Time: 8:53 AM
 */
/**
 * User password reset process
 */
namespace KoomooBundle\Controller;

use http\Env\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\JiTestAccount as AccountEntity;
use AppBundle\Repository\JiTestAccountRepository;
use AppBundle\Form\JiTestAccountPasswordResetRequestType;
use AppBundle\Form\JiTestAccountPasswordResetType;

/**
 * Class AccountController for test purpose
 *
 * @Route("/jitest/account", name="jiTestAccount")
 *
 * @package AppBundle\Controller
 */
class DefaultController extends Controller
{

    public function indexAction()
    {
        return new Response();
    }

}