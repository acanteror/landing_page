<?php

namespace LandingBundle\Command;

use LandingBundle\Entity\Message;
use LandingBundle\Manager\MessageManager;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GetMessagesCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this->setName('landing:page:messages');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /** @var MessageManager $manager */
        $manager = $this->getContainer()->get("landing.manager.message");
        $messages = $manager->findAll();

        if (count($messages) > 0){
            /** @var Message $message */
            foreach ($messages as $k => $message){
                $n = $k+1;
                $output->writeln('<question>'.$n.'>></question>'.
                    '<comment>NOMBRE: </comment><info>'.$message->getName().'</info> '.
                    '<comment>APELLIDOS: </comment><info>'.$message->getSurname().'</info> '.
                    '<comment>TELÉFONO: </comment><info>'.$message->getPhone().'</info> '.
                    '<comment>EMAIL: </comment><info>'.$message->getEmail().'</info> '.
                    '<comment>T.VEHÍCULO: </comment><info>'.$message->getTypeVehicle()->getName().'</info> '.
                    '<comment>MODELO: </comment><info>'.$message->getVehicle()->getName().'</info> '.
                    '<comment>PREFERENCIA: </comment><info>'.$message->getPreference()->getName().'</info> '
                );


            }
        } else {
            $output->writeln('<info>No se encontraron solicitudes de información en la base de datos.</info>');
        }





    }
}