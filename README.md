# UoL-COMP208-GroupProject
The goal of the project is to design an intelligent auto-rating online system, which used a website as the platform.

## Introduction
The goal of the project is to design an intelligent auto-rating online system, which used a website as the platform. The system was designed for students to analyse their wrong answers to some questions in exercises and exams. The core of this system is our special intelligent auto-rating algorithm based on NLP neural network. Except for this, we implemented the basic operations of the website, such as login, displaying of wrong questions and list interface, shared forum and rating, etc. We also rented a remote server as well as the associated database to store the data needed for the system functions.

## Functional description
1. Sign up: This function allows the user to create a new account with a distinct email address and specified personal information.
1. Sign in: This function allows the user to login the account with the e-mail address and correct password, in the identity of an administrator, an expert or a normal user.
1. University Question set: This function maintains information of the pre-set school test questions, which allows the user to retrieve the question and upload their wrong answer.
1. Intelligent system evaluation: The intelligent system will rate the wrong answer of a school question set automatically on the basis of how far it is from the solution to give the user a general feedback, and it can also check how far two solutions are to the same problems.
1. Upload question: This function allows the user to upload their own questions of wrong answer to the system, together with mistaken answer and correct answer. The uploaded questions include relevant tags and notes. The uploaded questions will be assigned a unique question ID upon uploaded, and can be set as public or private to other users.
1. Reset password: This function allows the user to  reset a new password once forgetting the last one. The user need to input his email to get the privilege of resetting password.
1. User retrieval: This function allows the user to type in the key words in the search box, and the system will show the related questions stored in the school question set or set public by the other users. The user can also use this function to search for other users.
1. Question sort: The user can choose to sort the questions in the main page or in the retrieved result page by date, likenum int or accuracy rate.
1. Administrator supervision: This function allows the administrator to supervise the behavior of the normal users and the expert, and inspect and delete the inappropriate uploaded questions.

## Evaluation Algorithm
The algorithm consists of two parts: the NLP API provided by a third party and an extra improvement code section implemented by the group members.

1. **Natural Language Processing API:** Instead of implementing a well-trained NLP neural network by ourselves, which is unrealistic, our team decided to purchase a completed NLP algorithm API provided by an organization called RxNLP. This API uses a well trained NLP neural network to compute similarity between two units of texts using Jaccard, Cosine and Dice similarity measures.
In our new rating system, this API was used as the main part of the algorithm, which had significant contribute to the synonyms recognition.

1. **Improvement algorithm:** Besides using the API, we also attached an extra PHP section in the backend code, for the purpose to improve the performance of the API.
The main function of this extra code is to get rid of the influence of antonyms, which cannot be recognized by the API we chose. In this code fragment, the numbers of the word "not" in both sentences(wrong answer and correct solution) will be counted then compared. Via this, we will easily find out whether both texts are negative or positive. After that, the result of this section and the rating given by API will be combined and the final rating will be given.


## Developers List
* Haoran Xu
* Yiyi Pu
* Chen Lyu
* Wenjia Wang
* Xueyi Cheng
* Yuxuan Zhang

