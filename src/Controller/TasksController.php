<?php

namespace App\Controller;

use App\Entity\Tasks;
use App\Entity\User;
use App\Form\TasksType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/tasks")
 */
class TasksController extends AbstractController
{
    /**
     * @Route("/", name="tasks_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $tasks = $entityManager
            ->getRepository(Tasks::class)
            ->findAll();

        return $this->render('tasks/index.html.twig', [
            'tasks' => $tasks,
            'user' => $user
        ]);
    }

    /**
     * @Route("/new", name="tasks_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $task = new Tasks();
        $form = $this->createForm(TasksType::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($task);
            $entityManager->flush();

            return $this->redirectToRoute('dashboard', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('tasks/new.html.twig', [
            'task' => $task,
            'form' => $form,
            'user' => $user
        ]);
    }

    /**
     * @Route("/{id}", name="tasks_show", methods={"GET"})
     */
    public function show(Tasks $task): Response
    {
        $user = $this->getUser();
        return $this->render('tasks/show.html.twig', [
            'task' => $task,
            'user' => $user
        ]);
    }

    /**
     * @Route("/{id}/edit", name="tasks_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Tasks $task, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(TasksType::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('tasks_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('tasks/edit.html.twig', [
            'task' => $task,
            'form' => $form,
            'user' => $user
        ]);
    }

    /**
     * @Route("/{id}", name="tasks_delete", methods={"POST"})
     */
    public function delete(Request $request, Tasks $task, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$task->getId(), $request->request->get('_token'))) {
            $entityManager->remove($task);
            $entityManager->flush();
        }

        return $this->redirectToRoute('tasks_index', [], Response::HTTP_SEE_OTHER);
    }
}
