<?php

namespace Site\ReverseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Site\ReverseBundle\Entity\Article;
use Site\ReverseBundle\Form\ArticleType;

class DefaultController extends Controller
{/*10*/

	public function indexAction()
    {

	$em = $this->getDoctrine()->getManager();
	$article = $em->getRepository("SiteReverseBundle:Article")->findAll();

        return $this->render("SiteReverseBundle:Default:index.html.twig", array(
	'article' => $article
/*20*/	));
    }


	public function AddArticleAction()
    {
        $em = $this->getDoctrine()->getManager();
	$a = new Article();
	$form = $this->createForm(new ArticleType(), $a);
	$request = $this->getRequest();
/*30*/	if($request->isMethod('POST')){
		$form->bindRequest($request);
		if($form->isValid()){
			$a = $form->getData();
			$em->persist($a);
			$em->flush();
			return $this->redirect($this->generateUrl("re_VoirArticle", array(
                        'id' => $a->getId()
                        )));
		}
/*40*/	}

        return $this->render("SiteReverseBundle:Default:AddArticle.html.twig", array(
	'form' => $form->createView()
	));
	}


     	public function VoirArticleAction(Article $article)
    	{
/*50*/
        return $this->render("SiteReverseBundle:Default:VoirArticle.html.twig", array(
        'article' => $article
        ));

    	}



     	public function EditArticleAction(Article $article)
/*60*/    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new ArticleType(), $article);
        $request = $this->getRequest();
        if($request->isMethod('POST')){
                $form->bindRequest($request);
                if($form->isValid()){
                        $a = $form->getData();
                        $em->persist($a);
/*70*/                        $em->flush();


			return $this->redirect($this->generateUrl("re_VoirArticle", array(
			'id' => $a->getId(),
			)));
                }
        }

        return $this->render("SiteReverseBundle:Default:EditArticle.html.twig", array(
/*80*/	'id' => $article->getId(),
        'form' => $form->createView(),
        ));
        }


	public function DeleteArticleAction(Article $article){

	$em = $this->getDoctrine()->getManager();
	$em->remove($article);
/*90*/	$em->flush();


	return $this->redirect($this->generateUrl("re_Homepage"));

	}




/*10*/
}

