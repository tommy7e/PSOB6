pipeline {
  agent any

  stages {
    stage('Clone') {
      steps {
        git 'https://github.com/tommy7e/PSOB6.git'
      }
    }

    stage('Build') {
      steps {
        script {
          dockerImage = docker.build("tommy7e/PSOB6:latest")
        }
      }
    }

    stage('Testing') {
      steps {
        sh 'npm test'
      }
    }

    stage('Deploy') {
      steps {
        script {
          docker.withRegistry('', 'dockerhub-credentials') {
            dockerImage.push()
          }
        }
      }
    }
  }
}
