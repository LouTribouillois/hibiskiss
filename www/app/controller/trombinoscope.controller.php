<?php

require_once 'app/controller/controller.php';
require_once 'app/model/trombinoscope.model.php';
require_once 'app/model/model.php';


/**
 * controller en charge de la génération de la page d'accueil
 *
 * @return void
 */

function generateTrombinoscopePage() {
    $data = [
        'students' => getALLStudents(),
        'page_title' => "Tech'Etud",
        'view' => 'app/view/trombinoscope.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
} 

/**
 * controller en charge de la génération de la page etudiant
 *
 * @return void
 */

 function generateStudentPage() {
    $id = isset($_GET['id']) ? (int) $_GET['id'] : null;
    if ($id === null) {
        $_SESSION['FLASH'] = 'ID non trouvé';
        header('Location: index.php?route=error');
        exit();
    }else{
        $data = [
            'student' => getStudent($id),
            'page_title' => "Tech'Etud",
            'view' => 'app/view/student.wiew.php',
            'layout' => 'app/view/common/layout.php',
        ];
        generatePage($data);
    }

} 

function pagination($students_per_page = 12) {
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

    $offset = ($page - 1) * $students_per_page;

    $students = getStudent($students_per_page, $offset);

    $totalstudents = getALLStudents();
    $total_pages = ceil($totalstudents / $students_per_page);

    $data = [
        'students' => $students,
        'current_page' => $page,
        'I am denis web developper',
        'total_pages' => $total_pages
    ];
}