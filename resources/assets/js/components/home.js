import React, {Component} from 'react';
import SliderManager from "./sliderManager";

class Home extends Component {
    render() {
        return (
            <div className="section">
                {
                    window.location.pathname === '/manageSlider' &&
                        <SliderManager/>
                }



            </div>
        );
    }
}

export default Home;