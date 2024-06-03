pipeline {
    agent any

    environment {
        DOCKER_CREDENTIALS_ID = 'dockerhub0cred' // Jenkins credentials ID for Docker Hub
        DOCKER_IMAGE = 'hoshmand_shaho_mohammed/fastfood-website'
        DOCKER_TAG = "${env.BUILD_ID}" // Use the Jenkins build ID as the tag
    }

    stages {
        stage('Checkout') {
            steps {
                git branch: 'main', url: 'https://github.com/Hoshmand01/QuackFood.git'
            }
        }
        stage('Build Docker Image') {
            steps {
                script {
                    // Build the Docker image
                    docker.build("${DOCKER_IMAGE}:${DOCKER_TAG}")
                }
            }
        }
        stage('Push Docker Image') {
            steps {
                script {
                    // Push the Docker image to Docker Hub
                    docker.withRegistry('https://index.docker.io/v1/', "${DOCKER_CREDENTIALS_ID}") {
                        docker.image("${DOCKER_IMAGE}:${DOCKER_TAG}").push()
                    }
                }
            }
        }
    }
    post {
        always {
            // Clean workspace after build
            cleanWs()
        }
    }
}
