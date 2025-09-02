<?php

namespace frontend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use frontend\models\LoginForm;
use frontend\models\ContactForm;

class SiteController extends Controller
{
    //dummy datas
    private function getServicesData()
    {
        return [
            [
                'icon' => '<i class="fs-5 py-3 text-primary icon-ball fa-solid fa-basketball"></i>',
                'title' => "Lorem Ipsum",
                'description' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab nam tenetur obcaecati invedita, aperiam dolorem molestias. Corporis, accusamus ipsa?",
            ],
            [
                'icon' => '<i class="fs-5 py-3 text-success icon-docs fa-regular fa-file-lines"></i>',
                'title' => "Lorem Ipsum",
                'description' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab nam tenetur obcaecati invedita, aperiam dolorem molestias. Corporis, accusamus ipsa?",
            ],
            [
                'icon' => '<i class="fs-5 py-3 text-danger icon-speed fa-solid fa-gauge-simple-high"></i>',
                'title' => "Lorem Ipsum",
                'description' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab nam tenetur obcaecati invedita, aperiam dolorem molestias. Corporis, accusamus ipsa?",
            ],
            [
                'icon' => '<i class="fs-5 py-3 text-warning icon-layer fa-solid fa-layer-group"></i>',
                'title' => "Lorem Ipsum",
                'description' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab nam tenetur obcaecati invedita, aperiam dolorem molestias. Corporis, accusamus ipsa?",
            ],
            [
                'icon' => '<i class="fs-5 py-3 text-primary icon-tv fa-solid fa-tv"></i>',
                'title' => "Lorem Ipsum",
                'description' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab nam tenetur obcaecati invedita, aperiam dolorem molestias. Corporis, accusamus ipsa?",
            ],
            [
                'icon' => '<i class="fs-5 py-3 text-success icon-bridge fa-solid fa-bridge"></i>',
                'title' => "Lorem Ipsum",
                'description' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab nam tenetur obcaecati invedita, aperiam dolorem molestias. Corporis, accusamus ipsa?",
            ],
        ];
    }

    private function getClientsData()
    {
        return [
            ['image' => '<img class="w-25" src="https://diginsights.com/wp-content/uploads/2024/03/starbsloh.png.jpeg" alt="" />'],
            ['image' => '<img class="w-25" src="https://diginsights.com/wp-content/uploads/2024/03/786NzPhpXo6G8hkutJkHTM-1200-80-1024x576.jpg" alt="" />'],
            ['image' => '<img class="w-25" src="https://diginsights.com/wp-content/uploads/2024/03/applebig.png.jpeg" alt="" />'],
            ['image' => '<img class="w-25" src="https://diginsights.com/wp-content/uploads/2024/03/mcds.png.jpeg" alt="" />'],
            ['image' => '<img class="w-25" src="https://diginsights.com/wp-content/uploads/2024/03/coca.png.jpeg" alt="" />'],
            ['image' => '<img class="w-25" src="https://diginsights.com/wp-content/uploads/2024/03/fedex-square.png.webp" alt="" />'],
            ['image' => '<img class="w-25" src="https://diginsights.com/wp-content/uploads/2024/03/amazz.png.jpeg" alt="" />'],
            ['image' => '<img class="w-25" src="https://diginsights.com/wp-content/uploads/2024/03/toyotalogo.png.jpeg" alt="" />'],
        ];
    }

    private function getTeamsData()
    {
        return [
            [
                'image' => 'https://images.unsplash.com/photo-1670249040693-83d92a1be114?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDZ8fHxlbnwwfHx8fHw%3D',
                'name' => 'Mjay Humilde',
                'title' => 'Web Developer'
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1749096291689-3368b6b7dc68?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDN8fHxlbnwwfHx8fHw%3D',
                'name' => 'John Bravo',
                'title' => 'Backend Developer'
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1606216769898-c88daccaa479?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjJ8fGd1eSUyMHByb2ZpbGUlMjBvbiUyMGElMjBzdWl0fGVufDB8fDB8fHww',
                'name' => 'Alberto Rizz',
                'title' => 'Designer'
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1606216769783-a7dbe227a17f?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjZ8fGd1eSUyMHByb2ZpbGUlMjBvbiUyMGElMjBzdWl0fGVufDB8fDB8fHww',
                'name' => 'Marky Johny',
                'title' => 'DEV OPS'
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $services = $this->getServicesData();
        $clients = $this->getClientsData();

        return $this->render('index', ['services' => $services, 'clients' => $clients]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */


    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        $teams = $this->getTeamsData();
        $clients = $this->getClientsData();

        return $this->render('about', ['teams' => $teams, 'clients' => $clients]);
    }


    public function actionTeam()
    {
        $teams = $this->getTeamsData();

        return $this->render('team', ['teams' => $teams]);
    }


    public function actionTestimonial()
    {
        $testimonials = [
            ['name' => 'Karl Redentor', 'profile' => 'https://plus.unsplash.com/premium_photo-1689747698547-271d2d553cee?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDEwfHx8ZW58MHx8fHx8', 'jobPosition' => 'Yapperist', 'review' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."'],
            ['name' => 'Abdul Salsalani', 'profile' => 'https://plus.unsplash.com/premium_photo-1661638006395-76d9c7a9f9fa?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDE1fHx8ZW58MHx8fHx8', 'jobPosition' => 'Lorem', 'review' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."'],
            ['name' => 'Yaper Maxim', 'profile' => 'https://plus.unsplash.com/premium_photo-1682096624626-9d81f2998d6e?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDh8fHxlbnwwfHx8fHw%3D', 'jobPosition' => 'Rizzler', 'review' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."'],
            ['name' => 'Rizz Lerns', 'profile' => 'https://plus.unsplash.com/premium_photo-1683121560052-cdbbad550feb?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDl8fHxlbnwwfHx8fHw%3D', 'jobPosition' => 'Anbilibabol', 'review' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."'],
            ['name' => 'Quicky Yepyep', 'profile' => 'https://plus.unsplash.com/premium_photo-1682096252599-e8536cd97d2b?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDJ8fHxlbnwwfHx8fHw%3D', 'jobPosition' => 'King of Hell', 'review' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."'],
        ];
        return $this->render('testimonial', ['testimonials' => $testimonials]);
    }

    public function actionServices()
    {
        $services = $this->getServicesData();

        return $this->render('services', ['services' => $services]);
    }

    public function actionPricing()
    {
        return $this->render('pricing');
    }

    public function actionBlog()
    {
        $blogs = [
            [
                'image' => 'https://plus.unsplash.com/premium_photo-1661265902815-162b20274c88?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8YmxvZyUyMGltYWdlc3xlbnwwfHwwfHx8MA%3D%3D',
                'title' => 'Lorem Ipsum Havertyu',
                'name' => 'John Doe',
                'date' => 'Aug, 7, 2025',
                'comments' => '35'
            ],
            [
                'image' => 'https://plus.unsplash.com/premium_photo-1683309565422-77818a287060?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8YmxvZyUyMGltYWdlc3xlbnwwfHwwfHx8MA%3D%3D',
                'title' => 'Eiusmod Tempor',
                'name' => 'Jane Smith',
                'date' => 'July, 28, 2025',
                'comments' => '12'
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1706265556226-746ab25eda1f?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fGJsb2clMjBpbWFnZXN8ZW58MHx8MHx8fDA%3D',
                'title' => 'Dolor Sit Amet',
                'name' => 'Peter Jones',
                'date' => 'June, 15, 2025',
                'comments' => '5'
            ]
        ];

        return $this->render('blog', ['blogs' => $blogs]);
    }

    public function actionSingleBlog()
    {
        return $this->render('singleBlog');
    }

    public function actionRegister()
    {
        return $this->render('register');
    }
    public function actionLogin()
    {
        return $this->render('login');
    }
}
