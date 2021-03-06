<?php

namespace App\Controller\Admin;

use App\Entity\Animals;
use App\Entity\Trees;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTranslationDomain('admin')
            ->setTitle('Arborie');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Arbres', 'fas fa-tree', Trees::class);
        yield MenuItem::linkToCrud('Animaux', 'fas fa-list', Animals::class);
        /*yield MenuItem::linkToCrud('Parcours', 'fas fa-list', Trails::class);*/

        yield MenuItem::subMenu('Utilisateurs', 'fa fa-users')->setSubItems([
            MenuItem::linkToCrud('Modifier un utilisateur', 'fa fa-cog', user::class),
            MenuItem::linkToRoute('Ajouter un utilisateur', 'fas fa-plus', 'app_register'),
        ]);


    }

}
