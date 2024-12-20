<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


use App\Entity\Reclamation;
use App\Entity\User;
use App\Form\ReclamationType;
use App\Form\UpdateReclamationType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\ReclamationRepository;
use Doctrine\Common\Collections\Expr\Value;
use Dompdf\Dompdf;
use Dompdf\Options;
use Twilio\Rest\Client;


class ReclamationController extends AbstractController
{
    #[Route('/reclamation1', name: 'app_reclamation')]
    public function index(): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'controller_name' => 'ReclamationController',
        ]);
    }

//////////////////////////////////////////ajout////////////////
     
    
#[Route('/addreclamation', name: 'addrecl')]
public function addrec(ManagerRegistry $doctrine, Request $request): Response
{
    $reclamation = new Reclamation();
    $reclamation->setDateR(new \DateTime('now'));

    // Assigner l'utilisateur statique avec ID=1
    $user = $doctrine->getManager()->getReference(User::class, 1);
    $reclamation->setUser($user);

    $form = $this->createForm(ReclamationType::class, $reclamation);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Sauvegarder la réclamation
        $em = $doctrine->getManager();
        $em->persist($reclamation);
        $em->flush();

        return $this->redirectToRoute('app_affrecfront');
    }

    return $this->renderForm('reclamation/index.html.twig', ['form2' => $form]);
}


 //////////////////////////affiche fil back ////////////////////////
     #[Route('/affichreclamation1', name: 'app_affrec')]
     public function liste1 (ManagerRegistry $mg): Response
     {
         $repo=$mg->getRepository(Reclamation::class);
         $resultat = $repo ->FindAll();
         return $this->render('reclamation/afficherback.html.twig', [
             'rec' => $resultat,
         ]);
     } 
  //////////////////////////l'affiche fil front ////////////////////////
  #[Route('/affichreclamation2', name: 'app_affrecfront')]
  public function liste2 (ManagerRegistry $mg): Response
  {  
     $repo=$mg->getRepository(Reclamation::class);
      $resultat = $repo ->FindAll();
      return $this->render('reclamation/afficherfront.html.twig', [
          'recl' => $resultat,
      ]);
  } 
 
 //////////////////////////modifier fil front ////////////////////////
     #[Route('/updater/{id}', name: 'app_updater')]
     public function updateType(ManagerRegistry $doctrine,ReclamationRepository $ReclamationRepository,$id,Request $request): Response
     {
    $reclamation=$ReclamationRepository->find($id);
    $form=$this->CreateForm(ReclamationType :: class,$reclamation);
    $form->handleRequest($request);
    if($form->isSubmitted() && $form->isValid())
    {
    $em=$doctrine->getManager();
    $em->persist($reclamation);
    $em->flush();
  return $this->redirectToRoute('app_affrecfront');
    }
    return $this->renderForm('reclamation/index.html.twig',array("form2"=>$form));
 
     }
 //////////////////////////modifier fil back ////////////////////////
     #[Route('/updaterb/{id}', name: 'app_updaterb')]
     public function updateTypeback(ManagerRegistry $doctrine,ReclamationRepository $ReclamationRepository,$id,Request $request): Response
     {
    $reclamation=$ReclamationRepository->find($id);
    $form=$this->CreateForm(UpdateReclamationType:: class,$reclamation);
    $form->handleRequest($request);
    if($form->isSubmitted() && $form->isValid())
    {
         
             //$accountSid = 'ACd242f744e7942d6fea0350871095248f';
            // $authToken = 'c82ddc2731c5f5bcd10d2c14d6f3fcad';
             $client = new Client($accountSid, $authToken);
     
             $message = $client->messages->create(
                 '+21652388939', // replace with admin's phone number
                 [
                     'from' => '+12186447740', // replace with your Twilio phone number
                     'body' => 'Votre reclamation a ete traité merci de consulter notre site 
                      ',
                 ]
             );
    $em=$doctrine->getManager();
    $em->persist($reclamation);
    $em->flush();
  return $this->redirectToRoute('app_affrec');
    }
    return $this->renderForm('reclamation/updateback.html.twig',array("form2"=>$form));
 
     }
 
 //////////////////////////supprimer fil bac ////////////////////////
 #[Route('/removerec/{id}', name: 'app_removerecback')]
 public function remove (ManagerRegistry $mg ,ReclamationRepository $X , $id): Response
 {    
 
 $reclamation= $X->find($id);
 $em=$mg->getManager();
 $em->remove($reclamation);
 $em->flush();
 return $this->redirectToRoute('app_affrec');
 }       
 
 //////////////////////////supprimer fil front ////////////////////////
 #[Route('/removerecfront/{id}', name: 'app_removerec')]
 public function removefront (ManagerRegistry $mg ,ReclamationRepository $X , $id): Response
 {    
 
 $reclamation= $X->find($id);
 $em=$mg->getManager();
 $em->remove($reclamation);
 $em->flush();
 return $this->redirectToRoute('app_affrecfront');
 }  
 /*/////////////////////////////////////////////////////////////////////////////////////
 #[Route('/reclamations/ajax-search', name: 'reclamation_ajax_search')]
 public function ajaxSearchAction(Request $request)
     {
         // récupérer la valeur de recherche envoyée depuis la requête AJAX
         $searchTerm = $request->get('search');
 
         // effectuer la recherche en utilisant le terme de recherche
         $reclamations = $this->getDoctrine()->getRepository(Reclamation::class)->findByTerm($searchTerm);
 
         // retourner les résultats de la recherche sous forme de réponse JSON
         return new JsonResponse($reclamations);
     }*/
 //Exporter pdf (composer require dompdf/dompdf)
     /**
 * @Route("/pdf", name="PDF_Reclamation", methods={"GET"})
 */
public function pdf(ReclamationRepository $ReclamationRepository)
{
    // Inclure la classe TCPDF
    $pdf = new \TCPDF();

    // Configurer les propriétés du document PDF
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Votre application');
    $pdf->SetTitle('Liste des Réclamations');
    $pdf->SetSubject('Réclamations');
    $pdf->SetKeywords('TCPDF, PDF, Réclamations');

    // Supprime les marges automatiques (si nécessaire)
    $pdf->SetMargins(15, 15, 15);
    $pdf->SetAutoPageBreak(true, 20);

    // Ajouter une page
    $pdf->AddPage();

    // Ajouter un titre principal
    $pdf->SetFont('helvetica', 'B', 16);
    $pdf->Cell(0, 10, 'Liste des Réclamations', 0, 1, 'C');
    $pdf->Ln(10);

    // Récupérer les réclamations
    $reclamations = $ReclamationRepository->findAll();

    // Fonction pour générer une section
    $generateSection = function ($title, $status, $reclamations) use ($pdf) {
        // Ajouter le titre de la section
        $pdf->SetFont('helvetica', 'B', 14);
        $pdf->Cell(0, 10, $title, 0, 1, 'L');
        $pdf->Ln(5);

        // Table HTML
        $html = '<table border="1" cellspacing="0" cellpadding="5">';
        $html .= '<thead>
                    <tr>
                        <th>ID</th>
                        <th>Utilisateur</th>
                        <th>Titre</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Traitement</th>
                    </tr>
                  </thead>';
        $html .= '<tbody>';

        $found = false;
        foreach ($reclamations as $reclamation) {
            if ($reclamation->getStatusR() === $status) {
                $found = true;
                $html .= '<tr>
                            <td>' . $reclamation->getId() . '</td>
                            <td>' . ($reclamation->getUser() ? $reclamation->getUser()->getNom() : 'N/A') . '</td>
                            <td>' . $reclamation->getTitreR() . '</td>
                            <td>' . $reclamation->getGenre() . '</td>
                            <td>' . $reclamation->getDescriptionR() . '</td>
                            <td>' . $reclamation->getDateR()->format('j-m-Y') . '</td>
                            <td>' . $reclamation->getStatusR() . '</td>
                            <td>' . $reclamation->getTraitement() . '</td>
                          </tr>';
            }
        }

        if (!$found) {
            $html .= '<tr><td colspan="8" align="center">Aucun enregistrement trouvé</td></tr>';
        }

        $html .= '</tbody></table>';

        // Écrire la table dans le PDF
        $pdf->SetFont('helvetica', '', 12);
        $pdf->writeHTML($html, true, false, true, false, '');
        $pdf->Ln(10); // Ajouter un espace après chaque section
    };

    // Générer les sections
    $generateSection('Réclamations en attente', 'En attente', $reclamations);
    $generateSection('Réclamations en cours de préparation', 'En cours de preparation', $reclamations);
    $generateSection('Réclamations confirmées', 'Confirmée', $reclamations);

    // Sortie du PDF vers le navigateur
    $pdf->Output('ListeDesReclamations.pdf', 'I'); // 'I' pour inline (affichage dans le navigateur)
}


}
