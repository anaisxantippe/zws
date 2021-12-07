<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Tasks;
use App\Entity\Notes;
use App\Repository\UserRepository;
use App\Repository\TasksRepository;
use App\Repository\NotesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
//------------------------------------------------------------------ RENDERING THE INDEX (DASHBOARD) -----------------------------------------------------------------------//
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function index(TasksRepository $task_repo, NotesRepository $note_repo): Response
    {
        //declaring my variables
        $user = $this->getUser();
        $task = $task_repo->findAll();
        $note = $note_repo->findAll();
        //simple return statement to render a view, we choose to render the file index.html.twig that is stored in the dashboard directory
        return $this->render('dashboard/index.html.twig', [
            //now we define variables and their value, so we can call them in the twig file that is asked to be rendered above
            'user' => $user,
            'task' => $task,
            'note' => $note
        ]
    );
    }
    //-------------------------------------------------------------- RENDERING THE DIFFERENT WORKSPACES --------------------------------------------------------------------//
    // ------ planning ------ //
    /**
     * @Route("/planning", name="planning")
     */
    public function planning(UserRepository $user_repo) {
        $user = $this->getUser();
        return $this->render('dashboard/planning.html.twig', [
            'user' => $user
        ]);
    }
    // ------ administration ------ //
    /**
     * @Route("/admin", name="admin")
     */
    public function admin(UserRepository $user_repo) {
        $user = $this->getUser();
        return $this->render('dashboard/admin.html.twig', [
            'user' => $user
        ]);
    }
    // ------ human ressources ------ //
    /**
     * @Route("/rh", name="rh")
     */
    public function rh(UserRepository $user_repo) {
        $user = $this->getUser();
        return $this->render('dashboard/rh.html.twig', [
            'user' => $user,
            'users' => $user_repo->findAll()
        ]);
    }
    // ------ marketing ------ //
    /**
     * @Route("/marketing", name="marketing")
     */
    public function marketing(UserRepository $user_repo) {
        $user = $this->getUser();
        return $this->render('dashboard/marketing.html.twig', [
            'user' => $user
        ]);
    }
    // ------ communication ------ //
    /**
     * @Route("/comm", name="comm")
     */
    public function comm(UserRepository $user_repo) {
        $user = $this->getUser();
        return $this->render('dashboard/comm.html.twig', [
            'user' => $user
        ]);
    }
    // ------ event ------ //
    /**
     * @Route("/event", name="event")
     */
    public function event(UserRepository $user_repo) {
        $user = $this->getUser();
        return $this->render('dashboard/event.html.twig', [
            'user' => $user
        ]);
    }
    // ------ webtv ------ //
    /**
     * @Route("/webtv", name="webtv")
     */
    public function webtv(UserRepository $user_repo) {
        $user = $this->getUser();
        return $this->render('dashboard/webtv.html.twig', [
            'user' => $user
        ]);
    }
    // ------ community ------ //
    /**
     * @Route("/community", name="community")
     */
    public function community(UserRepository $user_repo) {
        $user = $this->getUser();
        return $this->render('dashboard/community.html.twig', [
            'user' => $user
        ]);
    }
    // ------ GTSport ------ //
    /**
     * @Route("/gtsport", name="gtsport")
     */
    public function gtsport(UserRepository $user_repo) {
        $user = $this->getUser();
        return $this->render('dashboard/gtsport.html.twig', [
            'user' => $user
        ]);
    }
    // ------ Dofus ------ //
    /**
     * @Route("/dofus", name="dofus")
     */
    public function dofus(UserRepository $user_repo) {
        $user = $this->getUser();
        return $this->render('dashboard/dofus.html.twig', [
            'user' => $user
        ]);
    }
    // ------ FIFA ------ //
    /**
     * @Route("/fifa", name="fifa")
     */
    public function fifa(UserRepository $user_repo) {
        $user = $this->getUser();
        return $this->render('dashboard/fifa.html.twig', [
            'user' => $user
        ]);
    }
    // ------ League of Legends ------ //
    /**
     * @Route("/lol", name="lol")
     */
    public function lol(UserRepository $user_repo) {
        $user = $this->getUser();
        return $this->render('dashboard/lol.html.twig', [
            'user' => $user
        ]);
    }
    // // ------ homepage ------ //
    // /**
    //  * @Route("/", name="home")
    //  */
    // public function home() {
    //     //this is my homepage
    //     return $this->render('dashboard/home.html.twig', [
    //         'title' => 'Connectez-vous pour accèder au panel'
    //     ]);
    // }
}
