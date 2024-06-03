pipeline {
    agent any

    environment {
        DOCKER_CREDENTIALS_ID = 'docker0hub' // Jenkins credentials ID for Docker Hub
        DOCKER_IMAGE = 'Hoshmand Shaho Mohammed/QuackFood'
    }

    stages {
        stage('Checkout') {
            steps {
                git 'https://github.com/Hoshmand01/QuackFood.git'
            }
        }

        stage('Build') {
            steps {
                sh 'echo Building application...'
                // Add commands to build your application
            }
        }

        stage('Test') {
            steps {
                sh 'echo Running tests...'
                // Add commands to run your tests
            }
        }

        stage('Build Docker Image') {
            steps {
                script {
                    docker.build("${DOCKER_IMAGE}:${env.BUILD_NUMBER}")
                }
            }
        }

        stage('Push Docker Image') {
            steps {
                script {
                    docker.withRegistry('', "${DOCKER_CREDENTIALS_ID}") {
                        docker.image("${DOCKER_IMAGE}:${env.BUILD_NUMBER}").push()
                    }
                }
            }
        }
    }

    post {
        always {
            cleanWs()
        }
    }
}
