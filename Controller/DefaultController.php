<?php

	namespace Site\ReverseBundle\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Dotrine\Orm\EntityManager;

        use Site\ReverseBundle\Entity\Site;
        use Site\ReverseBundle\Form\SiteType;

	use Site\ReverseBundle\Entity\Article;
	use Site\ReverseBundle\Form\ArticleType;

	use Site\ReverseBundle\Entity\Publication;
	use Site\ReverseBundle\Form\PublicationType;

	use Site\ReverseBundle\Entity\Submit;
	use Site\ReverseBundle\Form\SubmitType;

	use Site\ReverseBundle\Entity\Warning;
	use Site\ReverseBundle\Form\WarningType;

	use Site\ReverseBundle\Entity\Contact;
        use Site\ReverseBundle\Form\ContactType;

	class DefaultController extends Controller
	{


		public function indexAction()
		{

			$em = $this->getDoctrine()->getManager();
			$article = $em->getRepository("SiteReverseBundle:Article")->findAll();
			$publication = $em->getRepository("SiteReverseBundle:Publication")->findAll();
			$submit = $em->getRepository("SiteReverseBundle:Submit")->findAll();
			$warning = $em->getRepository("SiteReverseBundle:Warning")->findAll();
	         	$site = $em->getRepository("SiteReverseBundle:Site")->findOneById(0);

			$query1 = $em->createQuery('SELECT COUNT(Artn) FROM SiteReverseBundle:Article Artn');
			$query2 = $em->createQuery('SELECT COUNT(Pubn) FROM SiteReverseBundle:Publication Pubn');
			$query3 = $em->createQuery('SELECT COUNT(Subn) FROM SiteReverseBundle:Submit Subn');
			$query4 = $em->createQuery('SELECT COUNT(Warn) FROM SiteReverseBundle:Warning Warn');

			$nbart = $query1->getSingleScalarResult();
                        $nbpub = $query2->getSingleScalarResult();
                        $nbsub = $query3->getSingleScalarResult();
                        $nbwar = $query4->getSingleScalarResult();

			return $this->render("SiteReverseBundle:Default:index.html.twig", array(
										'article' => $article,
										'publication' => $publication,
										'submit' => $submit,
										'warning' => $warning,
										'site' => $site,
										'nbart' => $nbart,
										'nbpub' => $nbpub,
										'nbsub' => $nbsub,
										'nbwar' => $nbwar,
										));
		}

		public function AddArticleAction()
		{
			$em = $this->getDoctrine()->getManager();
                        $site = $em->getRepository("SiteReverseBundle:Site")->findOneById(0);
			$a = new Article();
			$form = $this->createForm(new ArticleType(), $a);
			$request = $this->getRequest();
			if($request->isMethod('POST')){
				$form->bind($request);
				if($form->isValid()){
					$a = $form->getData();
					$em->persist($a);
					$em->flush();
					return $this->redirect($this->generateUrl("re_VoirArticle", array(
											 'id' => $a->getId(),
											 'site' => $site,
											 )));
					}
			}

			return $this->render("SiteReverseBundle:Default:AddArticle.html.twig", array(
									'form' => $form->createView(),
									'site' => $site,
												 ));
		}


     		public function VoirArticleAction(Article $article)
		{
		$em = $this->getDoctrine()->getManager();
                $site = $em->getRepository("SiteReverseBundle:Site")->findOneById(0);
		return $this->render("SiteReverseBundle:Default:VoirArticle.html.twig", array(
									  'article' => $article,
									  'site' => $site,
											  ));

		}

		public function ListArticleAction()
                {
		$em = $this->getDoctrine()->getManager();
		$site = $em->getRepository("SiteReverseBundle:Site")->findOneById(0);
		$article = $em->getRepository("SiteReverseBundle:Article")->findAll();
                return $this->render("SiteReverseBundle:Default:ListArticle.html.twig", array(
                                                                                    'article' => $article,
										    'site' => $site,
                                                                                        ));
		}

		public function EditArticleAction(Article $article)
      		{
                        $em = $this->getDoctrine()->getManager();
                        $site = $em->getRepository("SiteReverseBundle:Site")->findOneById(0);

			$form = $this->createForm(new ArticleType(), $article);
			$request = $this->getRequest();
			if($request->isMethod('POST')){
				$form->bind($request);
		                if($form->isValid()){
					$a = $form->getData();
					$em->persist($a);
					$em->flush();

					return $this->redirect($this->generateUrl("re_VoirArticle", array(
											  'id' => $a->getId(),
											  'site' => $site,
											  )));
				}
			}

			return $this->render("SiteReverseBundle:Default:EditArticle.html.twig", array(
											  'article' => $article,
											  'id' => $article->getId(),
											  'form' => $form->createView(),
											  'site' => $site,
											  ));
        }

		public function DeleteArticleAction(Article $article){

			$em = $this->getDoctrine()->getManager();
			$em->remove($article);
			$em->flush();

			return $this->redirect($this->generateUrl("re_Homepage"));

		}

		public function AddPublicationAction()
    	{
			$em = $this->getDoctrine()->getManager();
			$site = $em->getRepository("SiteReverseBundle:Site")->findOneById(0);
			$p = new Publication();
			$form = $this->createForm(new PublicationType(), $p);
			$request = $this->getRequest();
			if($request->isMethod('POST')){
                	$form->bind($request);
                	if($form->isValid()){
					$p = $form->getData();
					$em->persist($p);
					$em->flush();
					return $this->redirect($this->generateUrl("re_VoirPublication", array(
											  'id' => $p->getId(),
										    	  'site' => $site,
											)));
                }
			}

			return $this->render("SiteReverseBundle:Default:AddPublication.html.twig", array(
										 'form' => $form->createView(),
										 'site' => $site,
												 ));
        }


		public function VoirPublicationAction(Publication $publication)
        {
			$em = $this->getDoctrine()->getManager();
			$site = $em->getRepository("SiteReverseBundle:Site")->findOneById(0);
			return $this->render("SiteReverseBundle:Default:VoirPublication.html.twig", array(
										'publication' => $publication,
										'site' => $site,
										  ));
	}

		public function ListPublicationAction()
                {
                $em = $this->getDoctrine()->getManager();
                $publication = $em->getRepository("SiteReverseBundle:Publication")->findAll();
		$site = $em->getRepository("SiteReverseBundle:Site")->findOneById(0);
                return $this->render("SiteReverseBundle:Default:ListPublication.html.twig", array(
                                                                     'publication' => $publication,
								     'site' => $site,
                                                                                          ));
                }




		public function EditPublicationAction(Publication $publication)
        {
			$em = $this->getDoctrine()->getManager();
			$site = $em->getRepository("SiteReverseBundle:Site")->findOneById(0);
			$form = $this->createForm(new PublicationType(), $publication);
			$request = $this->getRequest();
			if($request->isMethod('POST')){
				$form->bind($request);
		                if($form->isValid()){
					$p = $form->getData();
					$em->persist($p);
					$em->flush();


					return $this->redirect($this->generateUrl("re_VoirPublication", array(
												'id' => $p->getId(),
												'site' => $site,
												  )));

                }
			}
			return $this->render("SiteReverseBundle:Default:EditPublication.html.twig", array(
									  'publication' => $publication,
									  'id' => $publication->getId(),
									  'form' => $form->createView(),
									  'site' => $site,
												  ));
		}

		public function DeletePublicationAction(Publication $publication){

			$em = $this->getDoctrine()->getManager();
			$em->remove($publication);
			$em->flush();


			return $this->redirect($this->generateUrl("re_Homepage"));

        }

		public function AddSubmitAction()
    	{
			$em = $this->getDoctrine()->getManager();
			$site = $em->getRepository("SiteReverseBundle:Site")->findOneById(0);
			$s = new Submit();
			$form = $this->createForm(new SubmitType(), $s);
			$request = $this->getRequest();
			if($request->isMethod('POST')){
                	$form->bind($request);
				if($form->isValid()){
					$s = $form->getData();
					$em->persist($s);
					$em->flush();
					return $this->redirect($this->generateUrl("re_VoirSubmit", array(
												'id' => $s->getId(),
												'site' => $site,
												 )));
                }
		}

			return $this->render("SiteReverseBundle:Default:AddSubmit.html.twig", array(
											'form' => $form->createView(),
											'site' => $site,
											));
        }


		public function VoirSubmitAction(Submit $submit)
        {

			$em = $this->getDoctrine()->getManager();
			$site = $em->getRepository("SiteReverseBundle:Site")->findOneById(0);

			return $this->render("SiteReverseBundle:Default:VoirSubmit.html.twig", array(
							'submit' => $submit,
							'site' => $site,
							 ));

        }



		public function ListSubmitAction()
                {
                $em = $this->getDoctrine()->getManager();
		$site = $em->getRepository("SiteReverseBundle:Site")->findOneById(0);
                $submit = $em->getRepository("SiteReverseBundle:Submit")->findAll();
                return $this->render("SiteReverseBundle:Default:ListSubmit.html.twig", array(
                                                                            'submit' => $submit,
									    'site' => $site,
                                                                                          ));
                }




		public function EditSubmitAction(Submit $submit)
        {
			$em = $this->getDoctrine()->getManager();
			$site = $em->getRepository("SiteReverseBundle:Site")->findOneById(0);
			$form = $this->createForm(new SubmitType(), $submit);
			$request = $this->getRequest();
			if($request->isMethod('POST')){
				$form->bind($request);
                		if($form->isValid()){
					$s = $form->getData();
					$em->persist($s);
					$em->flush();

					return $this->redirect($this->generateUrl("re_VoirSubmit", array(
									 'id' => $s->getId(),
									 'site' => $site,
									 )));

                }
			}

			return $this->render("SiteReverseBundle:Default:EditSubmit.html.twig", array(
								 'submit' => $submit,
								 'id' => $submit->getId(),
								 'form' => $form->createView(),
								 'site' => $site,
											 ));
		}


		public function DeleteSubmitAction(Submit $submit){

			$em = $this->getDoctrine()->getManager();
			$em->remove($submit);
			$em->flush();

			return $this->redirect($this->generateUrl("re_Homepage"));

        }


		public function AddWarningAction()
        {
			$em = $this->getDoctrine()->getManager();
			$site = $em->getRepository("SiteReverseBundle:Site")->findOneById(0);
			$w = new Warning();
			$form = $this->createForm(new WarningType(), $w);
			$request = $this->getRequest();
			if($request->isMethod('POST')){
                	$form->bind($request);
				if($form->isValid()){
					$w = $form->getData();
					$em->persist($w);
					$em->flush();
					return $this->redirect($this->generateUrl("re_VoirWarning", array(
								  'id' => $w->getId(),
								  'site' => $site,
								  )));
                }
			}

			return $this->render("SiteReverseBundle:Default:AddWarning.html.twig", array(
							 'form' => $form->createView(),
							 'site' => $site,
							 ));
        }

		public function VoirWarningAction(Warning $warning)
        {
			$em = $this->getDoctrine()->getManager();
			$site = $em->getRepository("SiteReverseBundle:Site")->findOneById(0);
			return $this->render("SiteReverseBundle:Default:VoirWarning.html.twig", array(
							'warning' => $warning,
							'site' => $site,
							  ));

        }

		public function ListWarningAction()
                {
                $em = $this->getDoctrine()->getManager();
		$site = $em->getRepository("SiteReverseBundle:Site")->findOneById(0);
                $warning = $em->getRepository("SiteReverseBundle:Warning")->findAll();
                return $this->render("SiteReverseBundle:Default:ListWarning.html.twig", array(
                                                                      'warning' => $warning,
								      'site' => $site,
                                                                                          ));
                }


		public function EditWarningAction(Warning $warning)
        {
			$em = $this->getDoctrine()->getManager();
			$site = $em->getRepository("SiteReverseBundle:Site")->findOneById(0);
			$form = $this->createForm(new WarningType(), $warning);
			$request = $this->getRequest();
			if($request->isMethod('POST')){
				$form->bind($request);
		                if($form->isValid()){
					$w = $form->getData();
					$em->persist($w);
					$em->flush();

					return $this->redirect($this->generateUrl("re_VoirWarning", array(
								  'id' => $w->getId(),
								  'site' => $site,
								  )));

                }
			}

			return $this->render("SiteReverseBundle:Default:EditWarning.html.twig", array(
									  'warning' => $warning,
									  'id' => $warning->getId(),
									  'form' => $form->createView(),
									  'site' => $site,
												  ));
		}


		public function DeleteWarningAction(Warning $warning){

			$em = $this->getDoctrine()->getManager();
			$em->remove($warning);
			$em->flush();

			return $this->redirect($this->generateUrl("re_Homepage"));

		}




		 public function AboutAction()
                {
		$em = $this->getDoctrine()->getManager();
		$site = $em->getRepository("SiteReverseBundle:Site")->findOneById(0);
                $article = $em->getRepository("SiteReverseBundle:Article")->findAll();

                return $this->render("SiteReverseBundle:Default:About.html.twig", array(
                                                                      'article' => $article,
								      'site' => $site,
											));

                }

		 public function ContactAction()
                {
                $em = $this->getDoctrine()->getManager();
		$site = $em->getRepository("SiteReverseBundle:Site")->findOneById(0);
		$contact = $em->getRepository("SiteReverseBundle:Contact")->findAll();
                        $c = new Contact();
                        $form = $this->createForm(new ContactType(), $c);
                        $request = $this->getRequest();
                        if($request->isMethod('POST')){
                                $form->bind($request);
                                if($form->isValid()){
                                        $c = $form->getData();
                                        $em->persist($c);
                                        $em->flush();
                                        return $this->redirect($this->generateUrl("re_Contact", array(
                                                                               'id' => $c->getId(),
									       'site' => $site,
                                                                              )));
                                        }
                        }


                return $this->render("SiteReverseBundle:Default:Contact.html.twig", array(
                                                                'form' => $form->CreateView(),
								'site' => $site,
                                                             ));


                }


		public function LegalAction()
                {
		$em = $this->getDoctrine()->getManager();
                $site = $em->getRepository("SiteReverseBundle:Site")->findOneById(0);
                return $this->render("SiteReverseBundle:Default:Legal.html.twig", array(
											'site' => $site,
											));

                }


		 public function SecurityAction()
                {
		$em = $this->getDoctrine()->getManager();
                $site = $em->getRepository("SiteReverseBundle:Site")->findOneById(0);

		return $this->render("SiteReverseBundle:Default:Security.html.twig", array(
                                                                                        'site' => $site,
                                                                                        ));
                }

		public function ServiceAction()
                {

		$em = $this->getDoctrine()->getManager();
                $site = $em->getRepository("SiteReverseBundle:Site")->findOneById(0);

                return $this->render("SiteReverseBundle:Default:Service.html.twig", array(
                                                                                        'site' => $site,
                                                                                        ));
                }

		 public function JobsAction()
                {
		$em = $this->getDoctrine()->getManager();
                $site = $em->getRepository("SiteReverseBundle:Site")->findOneById(0);

                return $this->render("SiteReverseBundle:Default:Jobs.html.twig", array(
                                                                                     'site' => $site,
                                                                                        ));
                }


		 public function SiteAction()
                {
                        $em = $this->getDoctrine()->getManager();
			$site = $em->getRepository("SiteReverseBundle:Site")->findOneById(0);
                        $si = new Site();
                        $form = $this->createForm(new SiteType(), $si);
                        $request = $this->getRequest();
                        if($request->isMethod('POST')){
                                $form->bind($request);
                                if($form->isValid()){
                                        $si = $form->getData();
                                        $em->persist($si);
                                        $em->flush();
                                        return $this->redirect($this->generateUrl("re_Homepage", array(
											'site' => $site,
												)));
						 }
                        }

                        return $this->render("SiteReverseBundle:Default:Site.html.twig", array(
											'site' => $site,
                                                                                        'form' => $form->createView()
                                                                                                 ));
                }


		 public function SiteAdminAction(Site $site)
		{

		$em = $this->getDoctrine()->getManager();
		$site = $em->getRepository("SiteReverseBundle:Site")->findOneById(0);
		$form = $this->createForm(new SiteType(), $site);
		$slug = $em->createQuery('SELECT Title.articletitle FROM SiteReverseBundle:Site Title.articletitle');
                        $request = $this->getRequest();
                        if($request->isMethod('POST')){
                                $form->bind($request);
                                if($form->isValid()){
                                        $si = $form->getData();
                                        $em->persist($si);
                                        $em->flush();

                                        return $this->redirect($this->generateUrl("re_Homepage", array(
                                                                                        'site' => $site,
											'slug' => $slug,
												)));
				 }
                        }

                        return $this->render("SiteReverseBundle:Default:SiteAdmin.html.twig", array(
                                                                       'site' => $site,
                                                                       'version' => $site->getVersion(),
                                                                       'form' => $form->createView(),
								       'slug' => $slug,
                                                                       ));
                }

}
