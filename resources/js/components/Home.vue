<template>
  <div class="mainspace">
    <div class="info-left">
      <h2>Take the fast track to learning a new instrument</h2>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
      <a href="/register">
        <button class="btn" style="background-color: #F38DC7; color: white; width: 350px;">SUBSCRIBE</button>
      </a>
    </div>
    <div class="bottom-space"></div>
    <div class="whitespace">
      <div class="icons">
        <div class="flex">
          <div>
            <h4>Sequential Music Lessons</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt mollitia ducimus ratione quaerat doloremque quidem recusandae porro sapiente!</p>
          </div>
          <div>
            <h4>Developmentally Appropriate Content</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus impedit quibusdam dicta consequatur provident est error ut</p>
          </div>
          <div>
            <h4>Downloadable Lessons</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia commodi sit dolore necessitatibus</p>
          </div>
        </div>
      </div>
      <br>
      <h3>Categories</h3>
      <div class="categories">
        <div class="category">
          <img src="https://i.ytimg.com/vi/TyzrApoGxKs/maxresdefault.jpg" alt="kermit">
          <p>Where to start</p>
        </div>
        <div class="category">
          <img
            src="https://static.seekingalpha.com/uploads/2018/5/957061_15271046313641_rId6_thumb.jpg"
            alt="monkey"
          >
          <p>Instrument Introduction</p>
        </div>
        <div class="category">
          <img
            src="https://www.oddee.com/wp-content/uploads/2018/01/Stockphoto-bomber-funny-picture-4.jpg"
            alt="corny"
          >
          <p>Learn to Play</p>
        </div>
        <div class="category">
          <img
            src="https://previews.123rf.com/images/vladacanon9/vladacanon90811/vladacanon9081100013/3810133-young-funny-chef-with-egg-isolated-on-white.jpg"
            alt="eggs"
          >
          <p>Instrument Care</p>
        </div>
        <div class="category">
          <img
            src="https://cdn.shopify.com/s/files/1/1429/0940/files/weird-stock-photos-funny_383076.jpg?v=1484118055"
            alt="weird"
          >
          <p>Songs That Teach</p>
        </div>
        <div class="category">
          <img src="https://i.redd.it/nkdlhujojja11.jpg" alt="weird">
          <p>Performances</p>
        </div>
      </div>
      <router-link class="bottom-course" to="/courses">
        <button
          class="btn"
          style="background-color: #F38DC7; color: white; width: 350px;"
        >EXPLORE COURSES</button>
      </router-link>
      <div class="greyspace">
        <h4>Ready to unlock your musical potential?</h4>
        <br>
        <a href="/register">
          <button
            class="btn"
            style="background-color: #F38DC7; color: white; width: 350px;"
          >SUBSCRIBE</button>
        </a>
      </div>
      <div class="footer">
        <div class="links">
          QUICK LINKS
          <ul>
            <li>Link</li>
            <li>Link</li>
            <li>Link</li>
            <li>Link</li>
          </ul>
        </div>
        <div class="links">
          QUICK LINKS
          <ul>
            <li>Link</li>
            <li>Link</li>
            <li>Link</li>
            <li>Link</li>
          </ul>
        </div>
        <div class="links">
          QUICK LINKS
          <ul>
            <li>Link</li>
            <li>Link</li>
            <li>Link</li>
            <li>Link</li>
          </ul>
        </div>
        <div class="links">
          SOCIALS
          <br>
          <img
            src="https://cdn4.iconfinder.com/data/icons/miu-gloss-social/60/facebook-512.png"
            alt
          >
          <img
            src="https://cdn4.iconfinder.com/data/icons/miu-gloss-social/60/facebook-512.png"
            alt
          >
          <img
            src="https://cdn4.iconfinder.com/data/icons/miu-gloss-social/60/facebook-512.png"
            alt
          >
          <img
            src="https://cdn4.iconfinder.com/data/icons/miu-gloss-social/60/facebook-512.png"
            alt
          >
          <img
            src="https://cdn4.iconfinder.com/data/icons/miu-gloss-social/60/facebook-512.png"
            alt
          >
        </div>
      </div>
    </div>
  </div>
</template>


<script>
export default {
  mounted() {
    console.log("Component mounted.");
  }
};
</script>

<style scoped>
.info-left {
  color: white;
  margin-left: 200px;
  margin-top: 300px;
  width: 500px;
}

.icons {
  width: 50%;
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.flex {
  display: flex;
  flex-direction: row;
}
.flex h4 {
  color: #ef5daa;
}
.categories {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: center;
}
.category img {
  max-width: 500px;
  max-height: 400px;
  margin: 20px;
}
.greyspace {
  background-color: #f4f4f4;
  height: 340px;
  padding: 200px;
  margin-top: 50px
}
.bottom-space{
    background: linear-gradient(to bottom, #ff330000 0%, #ffffff 100%);
    height: 500px
}
.whitespace{
    background: white;
    text-align: center
}
.bottom-course {
  margin-bottom: 74px;
  margin-top: 48px;
}
.footer {
  display: flex;
  flex-direction: row;
  justify-content: space-evenly;
  background-color: #2d3b49;
}
.links img {
  max-width: 30px;
}
.links {
  color: white;
  text-align: left;
}
.links ul li {
  list-style: none;
  color: #5eacf6;
}
</style>