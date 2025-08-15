<script setup>
import { ref } from 'vue'
import FaqItem from './FaqItem.vue'

// FAQ Data for Maibere Ventures Nigeria Ltd
const faqs = [
  {
    question: "What does Maibere Ventures Nigeria Ltd offer?",
    answer: "We provide a trusted marketplace for fresh farm produce, livestock, and agricultural products directly from verified farmers."
  },
  {
    question: "Who can sell on Maibere Ventures?",
    answer: "Any verified farmer, livestock owner, or agricultural supplier can list their products on our platform."
  },
  {
    question: "How do I buy products?",
    answer: "Browse our products, add them to your cart, and place an order. You can choose home delivery or arrange pickup with the seller."
  },
  {
    question: "Do you offer nationwide delivery?",
    answer: "Yes, we work with reliable logistics partners to deliver products across Nigeria."
  },
  {
    question: "Are prices negotiable?",
    answer: "Some sellers allow price negotiation. You can contact the seller directly to discuss bulk or special pricing."
  }
]
</script>

<template>
  <section class="bg-white py-16" data-aos="fade-up" data-aos-duration="800">
    <div class="container mx-auto px-4">
      <!-- Section Title -->
      <div class="text-center mb-12">
        <h3 class="text-3xl font-bold text-gray-800">Frequently Asked Questions</h3>
        <div class="w-20 h-1 bg-green-600 mx-auto my-3"></div>
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
          <p class="mb-2">Our customer service team is here to assist with any questions.</p>
          <p class="font-bold text-lg mb-6">
            Email:
            <a href="mailto:info@maibereventures.com" class="text-green-600 underline">
              info@maibereventures.com
            </a>
          </p>
          <a
            href="/contact"
            class="inline-block bg-green-600 hover:bg-green-700 text-white py-2 px-6 rounded transition-transform transform hover:scale-105"
          >
            Contact Us
          </a>
        </div>
      </div>
    </div>
  </section>
</template>
