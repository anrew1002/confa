(function () {
    let list_tasks = document.querySelector(".todo-list__list");
    list_tasks.addEventListener('click', function (e) {
        let target = e.target;
        if (target.classList.contains("task__discription")) {
            let parent = target.parentElement;

            let item = parent.querySelector(".task__desc")
            item.classList.toggle("visible")
        }

    });

})()