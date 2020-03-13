<div class="amp-carousel-section">
  <amp-carousel width="750" height="236" layout="responsive" type="slides" autoplay delay=4000 loop on="slideChange:AMP.setState({selected: {slide: event.index}})">
    <?php for ($i = 0; $i < count($slideArray); $i++) : ?>
      <a href=" <?php echo $slideArray[$i]["href"] ?> ">
        <amp-img width="750" height="236" layout="responsive" src=" <?php echo $slideArray[$i]["src"] ?> "></amp-img>
      </a>
    <?php endfor; ?>
  </amp-carousel>

  <p class="dots">
    <?php for ($j = 0; $j < count($slideArray); $j++) : ?>
      <?php if ($j === 0) : ?>
        <span [class]="selected.slide == <?php echo $j; ?> ? 'current' : ''" class="current"></span>
      <?php else : ?>
        <span [class]="selected.slide == <?php echo $j; ?> ? 'current' : ''"></span>
      <?php endif; ?>
    <?php endfor; ?>
  </p>
</div>
