
const GalleryClassName = 'gallery';
const GalleryDraggableClassName = 'gallery-draggable';
const GalleryLineClassName = 'photos-items';
const GallerySlideClassName = 'photosline';
const GalleryDotsClassName = 'gallerydots';
const GalleryDotClassName = 'gallerydot';
const GalleryDotActiveClassName = 'gallerydotactive';

class Gallery {
    constructor(element, options = {}) {
        this.containerNode = element;
        this.size = element.childElementCount; //слайды
        this.currentSlide = 0;
        this.currentSlideWasChanged = false;
        this.settings = {
            margin: options.margin || 0
        }

        this.manageHTML = this.manageHTML.bind(this);
        this.setParameters = this.setParameters.bind(this);
        this.setEvents = this.setEvents.bind(this);
        this.resizeGallery = this.resizeGallery.bind(this);
        this.startDrag = this.startDrag.bind(this);
        this.stopDrag = this.stopDrag.bind(this);
        this.dragging = this.dragging.bind(this);
        this.setStylePosition = this.setStylePosition.bind(this);
        this.clickDots = this.clickDots.bind(this);
        this.changeActiveDotClass = this.changeActiveDotClass.bind(this);
        this.changeCurrentSlide = this.changeCurrentSlide.bind(this);

        this.manageHTML();
        this.setParameters();
        this.setEvents();
    }

    manageHTML() {
        this.containerNode.classList.add(GalleryClassName);
        this.containerNode.innerHTML = `
            <div class="${GalleryLineClassName}">
                ${this.containerNode.innerHTML}
            </div>
            <div class = "${GalleryDotsClassName}"></div>
        `;
        this.lineNode = this.containerNode.querySelector(`.${GalleryLineClassName}`);
        this.dotsNode = this.containerNode.querySelector(`.${GalleryDotsClassName}`);

        this.slideNodes = Array.from(this.lineNode.children).map((childNode) =>
            wrapElementByDiv({
                element: childNode,
                className: GallerySlideClassName
            })
        );
        this.dotsNode.innerHTML = Array.from(Array(this.size).keys()).map((key) => (
            `<button class="${GalleryDotClassName} ${key === this.currentSlide ? GalleryDotActiveClassName : ' '}"></button>`
        )).join('');

        this.dotNodes = this.dotsNode.querySelectorAll(`${GalleryDotClassName}`); //задаем события, вытаскиваем

    }

    setParameters() {
        const coordsContainer = this.containerNode.getBoundingClientRect();
        this.width = coordsContainer.width;
        this.maximumX = - (this.size - 1) * (this.width + this.settings.margin);
        this.x = -this.currentSlide * (this.width + this.settings.margin);
        this.resetStyleTransition();
        this.lineNode.style.width = `${this.size * (this.width + this.settings.margin)}px`;
        this.setStylePosition();
        Array.from(this.slideNodes).forEach((slideNode) => {
            slideNode.style.width = `${this.width}px`;
            slideNode.style.marginRight = `${this.settings.margin}px`;
        })

    }

    setEvents() {
        this.debouncedResizeGallery = debounce(this.resizeGallery);
        window.addEventListener('resize', this.debouncedResizeGallery);
        this.lineNode.addEventListener('pointerdown', this.startDrag);
        window.addEventListener('pointerup', this.stopDrag);
        window.addEventListener('pointercancel', this.stopDrag);

        this.dotsNode.addEventListener('click', this.clickDots);
    }

    destroyEvents() {
        window.removeEventListener('resize', this.debouncedResizeGallery);
        this.lineNode.removeEventListener('pointerdown', this.startDrag);
        window.removeEventListener('pointerup', this.stopDrag);
        window.removeEventListener('pointercancel', this.stopDrag);
        this.dotsNode.removeEventListener('click', this.clickDots);
    }

    resizeGallery() {
        this.setParameters();
    }

    startDrag(evt) {
        this.currentSlideWasChanged = false;
        this.clickX = evt.pageX;
        this.startX = this.x;
        this.resetStyleTransition();
        this.containerNode.classList.add(GalleryDraggableClassName);
        window.addEventListener('pointermove', this.dragging);
    }

    stopDrag() {
        window.removeEventListener('pointermove', this.dragging);
        this.x = - this.currentSlide * (this.width + this.settings.margin);
        this.setStylePosition();
        this.setStyleTransition();

        this.containerNode.classList.remove(GalleryDraggableClassName);
    }

    dragging(evt) {
        this.dragX = evt.pageX;
        const dragShift = this.dragX - this.clickX;
        const easing = dragShift / 5;
        this.setStylePosition();
        this.x = Math.max(Math.min(this.startX + dragShift, easing), this.maximumX + easing);

        //смена активного слайда
        if (dragShift > 50 && this.currentSlide > 0 && !this.currentSlideWasChanged) {
            this.currentSlideWasChanged = true;
            this.currentSlide = this.currentSlide - 1;
        }

        if (dragShift < -50 && !this.currentSlideWasChanged && this.currentSlide < this.size - 1) {
            this.currentSlideWasChanged = true;
            this.currentSlide = this.currentSlide + 1;
        }

    }

    changeActiveDotClass() {
        for (let i = 0; i < this.dotNodes.length; i++) {
            this.dotNodes[i].classList.remove(GalleryDotActiveClassName);
        }
        this.dotNodes[this.currentSlide].classList.add(GalleryDotActiveClassName); //
    }

    changeCurrentSlide() {
        this.x = - this.currentSlide * (this.width + this.settings.margin);
        this.setStyleTransition();
        this.setStylePosition();
        this.changeActiveDotClass(); //
    }

    clickDots(evt) {
        const dotNode = evt.target.closest('button') //closest ищет ближ. родителя по селектору button
        if (!dotNode) {
            return;
        }

        let dotNumber;
        for(let i = 0; i < 2; i++) {
            if(this.dotNodes [i] === dotNode) {
                dotNumber = i;
                break;
            }

        }
        if (dotNumber === this.currentSlide) {
            return;


        }
        this.currentSlide = dotNumber;
        this.changeCurrentSlide(); //
    }


    setStylePosition() {
        this.lineNode.style.transform = `translate3d(${this.x}px, 0, 0)`

    }

    setStyleTransition() {
        this.lineNode.style.transition = `all 0.25s ease 0s`;
    }

    resetStyleTransition() {
        this.lineNode.style.transition = `all 0s ease 0s`;
    }

}
    function wrapElementByDiv({element, className}){
        const wrapperNode = document.createElement('div');
        wrapperNode.classList.add(className);

        element.parentNode.insertBefore(wrapperNode, element);
        wrapperNode.appendChild(element);
        return wrapperNode;
    }

    function debounce(func, time = 100) {
        let timer;
        return function (event) {
            clearTimeout(timer);
            timer = setTimeout(func, time, event);
        }
    }
