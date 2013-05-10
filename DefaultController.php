<?php
  
namespace Site\ReverseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Site\ReverseBundle\Entity\Article;
use Site\ReverseBundle\Form\ArticleType;

use Site\ReverseBundle\Entity\Publication;
use Site\ReverseBundle\Form\PublicationType;


class DefaultController extends Controller
{

	public function indexAction()
    {

	$em = $this->getDoctrine()->getManager();
/*20*/	$article = $em->getRepository("SiteReverseBundle:Article")->findAll();
	$publication = $em->getRepository("SiteReverseBundle:Publication")->findAll();

        return $this->render("SiteReverseBundle:Default:index.html.twig", array(
	'article' => $article,
        'publication' => $publication
	));
    }


/*30*/	public function AddArticleAction()
    {
        $em = $this->getDoctrine()->getManager();
	$a = new Article();
	$form = $this->createForm(new ArticleType(), $a);
	$request = $this->getRequest();
	if($request->isMethod('POST')){
		$form->bind($request);
		if($form->isValid()){
			$a = $form->getData();
/*40*/			$em->persist($a);
			$em->flush();
			return $this->redirect($this->generateUrl("re_VoirArticle", array(
                        'id' => $a->getId()
                        )));
		}
	}

        return $this->render("SiteReverseBundle:Default:AddArticle.html.twig", array(
	'form' => $form->createView()
/*50*/	));
	}


     	public function VoirArticleAction(Article $article)
    	{

        return $this->render("SiteReverseBundle:Default:VoirArticle.html.twig", array(
        'article' => $article
        ));
/*60*/
    	}



     	public function EditArticleAction(Article $article)
        {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new ArticleType(), $article);
/*70*/  $request = $this->getRequest();
        if($request->isMethod('POST')){
             $form->bind($request);
                if($form->isValid()){
                        $a = $form->getData();
                        $em->persist($a);
                        $em->flush();


			return $this->redirect($this->generateUrl("re_VoirArticle", array(
/*80*/			'id' => $a->getId(),
			)));
               }
        }

        return $this->render("SiteReverseBundle:Default:EditArticle.html.twig", array(
	'id' => $article->getId(),
        'form' => $form->createView(),
        ));
        }
/*90*/

	public function DeleteArticleAction(Article $article){

	$em = $this->getDoctrine()->getManager();
	$em->remove($article);
	$em->flush();


	return $this->redirect($this->generateUrl("re_Homepage"));
/*100*/
	}

	public function AddPublicationAction()
    	{
        $em = $this->getDoctrine()->getManager();
        $p = new Publication();
        $form = $this->createForm(new PublicationType(), $p);
        $request = $this->getRequest();
        if($request->isMethod('POST')){
/*110*/         $form->bind($request);
                if($form->isValid()){
                        $p = $form->getData();
                        $em->persist($p);
                        $em->flush();
                        return $this->redirect($this->generateUrl("re_VoirPublication", array(
                        'id' => $p->getId()
                        )));
                }
        }
/*120*/
        return $this->render("SiteReverseBundle:Default:AddPublication.html.twig", array(
        'form' => $form->createView()
        ));
        }


	public function VoirPublicationAction(Publication $publication)
        {

/*130*/  return $this->render("SiteReverseBundle:Default:VoirPublication.html.twig", array(
        'publication' => $publication
         ));

        }


 	public function EditPublicationAction(Publication $publication)
        {
        $em = $this->getDoctrine()->getManager();
/*140*/
        $form = $this->createForm(new PublicationType(), $publication);
        $request = $this->getRequest();
        if($request->isMethod('POST')){
           $form->bind($request);
                if($form->isValid()){
                        $p = $form->getData();
                        $em->persist($p);
                        $em->flush();

/*150*/
                        return $this->redirect($this->generateUrl("re_VoirPublication", array(
                       'id' => $p->getId(),
                        )));

                }
        }

        return $this->render("SiteReverseBundle:Default:EditPublication.html.twig", array(
        'id' => $publication->getId(),
/*160*/ 'form' => $form->createView(),
        ));
 }



	public function DeletePublicationAction(Publication $publication){

        $em = $this->getDoctrine()->getManager();
        $em->remove($publication);
/*170*/ $em->flush();


        return $this->redirect($this->generateUrl("re_Homepage"));

        }

}

