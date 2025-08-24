<script setup>
import { ref } from 'vue'
import FaqItem from './FaqItem.vue'

// FAQ Data for Federal Polytechnic Orogun Journal
const faqs = [
  {
    question: "What is the Federal Polytechnic Orogun Journal about?",
    answer: "The Journal of Academic Research & Innovation (JARI) is the official peer-reviewed academic journal of Federal Polytechnic Orogun, promoting research and innovation across various fields."
  },
  {
    question: "How often is the journal published?",
    answer: "The journal is published biannually, typically in June and December each year."
  },
  {
    question: "Who can submit articles to the journal?",
    answer: "Researchers, academicians, postgraduate students, and industry professionals are welcome to submit original research articles, reviews, and case studies."
  },
  {
    question: "What is the submission process?",
    answer: "Authors can submit their manuscripts via our online submission portal. All submissions undergo a peer-review process before publication."
  },
  {
    question: "Is there a publication fee?",
    answer: "No, there are no fees charged for submission or publication in the Federal Polytechnic Orogun Journal."
  }
]
</script>

<template>
  <section class="bg-white py-16" data-aos="fade-up" data-aos-duration="800">
    <div class="container mx-auto px-4">
      <!-- Section Title -->
      <div class="text-center mb-12">
        <h3 class="text-3xl font-bold text-gray-800">Frequently Asked Questions</h3>
        <div class="w-20 h-1 bg-primary mx-auto my-3"></div>
      </div>

      <div class="flex flex-col lg:flex-row gap-12">
        <!-- FAQ Accordion -->
        <div class="lg:w-1/2 space-y-4">
          <FaqItem
            v-for="(faq, index) in faqs"
            :key="index"
            :question="faq.question"
            :answer="faq.answer"
          />
        </div>

        <!-- Call to Action -->
        <div class="lg:w-1/2 bg-gray-50 text-gray-700 p-8 rounded-lg shadow-md">
          <h4 class="text-2xl font-semibold mb-4">Need More Help?</h4>
          <p class="mb-2">Contact our editorial team for any inquiries or assistance.</p>
          <p class="font-bold text-lg mb-6">Email: <a href="mailto:journal@fporogun.edu.ng" class="text-primary underline">journal@fporogun.edu.ng</a></p>
          <a
            href="/submission-guidelines"
            class="inline-block bg-primary hover:bg-primary-dark text-white py-2 px-6 rounded transition-transform transform hover:scale-105"
          >
            View Submission Guidelines
          </a>
        </div>
      </div>
    </div>
  </section>
</template>
