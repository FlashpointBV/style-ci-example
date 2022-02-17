<template>
  <dl>
    <dt :class="{'--visible': filterOpen }" @click="toggleFilter()">Price</dt>
    <dd v-show="filterOpen">
      <div class="price__filter">
        <div class="custom__controls">
          <input v-model.number="value[0]" type="number"/>
          <input v-model.number="value[1]" type="number"/>
        </div>
        <div v-show="showError" class="--error">{{ $t('Enter a correct value') }}</div>
      </div>
    </dd>
  </dl>
</template>

<script lang="ts">

export default class {

  private showError: boolean;
  private filterOpen: boolean = false;
  private value: Array<number>;
  private sliderHeight: number;

  private created(): void {
    this.showError = false;
    this.sliderHeight = window.outerWidth > 940 ? 3 : 2;
  }

  private toggleFilter(): void {
    this.filterOpen = !this.filterOpen;
  }
}
</script>
