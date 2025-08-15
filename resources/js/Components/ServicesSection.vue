<script setup>
import { ref } from 'vue';

const services = [
  {
    icon: { type: 'fas', name: 'tractor' },
    title: "Fresh Farm Produce",
    description: "We supply fresh vegetables, grains, and fruits directly from our farms to your doorstep.",
    link: '/farm-produce',
  },
  {
    icon: { type: 'fas', name: 'cow' },
    title: "Healthy Livestock",
    description: "Quality cows, goats, and poultry raised under healthy, sustainable farming practices.",
    link: '/livestock',
  },
  {
    icon: { type: 'fas', name: 'seedling' },
    title: "Seed & Fertilizer Supply",
    description: "Get top-grade seeds and organic fertilizers to boost your farming yields.",
    link: '/farm-inputs',
  },
  {
    icon: { type: 'fas', name: 'shopping-basket' },
    title: "Wholesale & Retail Sales",
    description: "Whether you’re buying in bulk or small quantities, we’ve got you covered at fair prices.",
    link: '/sales',
  },
  {
    icon: { type: 'fas', name: 'truck' },
    title: "Nationwide Delivery",
    description: "Fast and reliable delivery service to all parts of Nigeria for produce and livestock.",
    link: '/delivery',
  },
];

const scrollContainer = ref(null);

const scrollLeft = () => {
  scrollContainer.value.scrollBy({ left: -300, behavior: 'smooth' });
};

const scrollRight = () => {
  scrollContainer.value.scrollBy({ left: 300, behavior: 'smooth' });
};
</script>

<template>
  <section class="py-16 bg-primary">
    <div class="max-w-4xl mx-auto text-center px-0 md:px-1">
      <h5 class="text-lg font-medium text-white" data-aos="fade-left">Our Services</h5>
      <h2 class="text-3xl font-bold text-gray-100 mt-2" data-aos="fade-right" data-aos-delay="100">
        What We Offer to Farmers & Customers
      </h2>
      <p class="mt-4 text-gray-50" data-aos="fade-up" data-aos-delay="200">
        Maibere Ventures Nigeria Ltd provides high-quality agricultural products and livestock, ensuring freshness, health, and customer satisfaction.
      </p>

      <!-- Horizontal scroll container with cards -->
      <div class="relative mt-10">
        <!-- Left Arrow -->
        <button
          @click="scrollLeft"
          class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-white dark:bg-gray-800 p-2 rounded-full shadow hover:bg-gray-100 dark:hover:bg-gray-700"
        >
          ◀
        </button>

        <!-- Scrollable cards -->
        <div
          ref="scrollContainer"
          class="flex gap-6 overflow-x-auto scroll-smooth whitespace-nowrap px-10 py-2 scrollbar-hide"
        >
          <div
            v-for="(service, index) in services"
            :key="index"
            class="min-w-[280px] bg-gray-100 dark:bg-gray-900 p-6 rounded-lg shadow transition-transform duration-500 hover:scale-105 hover:shadow-xl whitespace-normal break-words"
            data-aos="zoom-in"
            :data-aos-delay="300 + index * 100"
          >
            <div class="text-4xl text-primary mb-4">
              <font-awesome-icon :icon="[service.icon.type, service.icon.name]" />
            </div>
            <h3 class="text-xl font-semibold mb-2">{{ service.title }}</h3>
            <p class="text-gray-600 dark:text-gray-300 mb-4">{{ service.description }}</p>
            <a
              :href="service.link"
              class="inline-block bg-primary text-white px-4 py-2 rounded hover:bg-secondary-700 transition"
            >
              Learn More
            </a>
          </div>
        </div>

        <!-- Right Arrow -->
        <button
          @click="scrollRight"
          class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-white dark:bg-gray-800 p-2 rounded-full shadow hover:bg-gray-100 dark:hover:bg-gray-700"
        >
          ▶
        </button>
      </div>
    </div>
  </section>
</template>
