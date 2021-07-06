const scrollDownBtn = document.getElementById("scroll-down");
const nextbtn = document.getElementById("next");
const prevBtn = document.getElementById("prev");

scrollDownBtn.onclick = () => {
  document.documentElement.scrollTop = window.innerHeight;
  document.body.scrollTop = window.innerHeight;
};

const changePage = (dir) => {
  console.log(dir);
  const location = window.location.href;
  console.log(location);
  if (location.indexOf("about") > 0) {
    window.location.href = location.replace(
      "about",
      dir == "next" ? "services" : "index"
    );
  } else if (location.indexOf("services") > 0) {
    window.location.href = location.replace(
      "services",
      dir == "next" ? "work" : "about"
    );
  } else if (location.indexOf("work") > 0) {
    window.location.href = location.replace(
      "work",
      dir == "next" ? "index" : "services"
    );
  } else {
    if (location.indexOf("index") > 0) {
      window.location.href = location.replace(
        "index",
        dir == "next" ? "about" : "work"
      );
    } else {
      window.location.href =
        dir == "next" ? location + "about.html" : location + "work.html";
    }
  }
};

prevBtn.onclick = () => {
  changePage("prev");
};
nextbtn.onclick = () => {
  changePage("next");
};
