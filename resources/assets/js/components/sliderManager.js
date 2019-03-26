import React, {Component} from 'react';

class SliderManager extends Component {
    render() {
        return (
            <div className="row justify-content-center">
                <div className="container">
                    <div className='col-md-12'>

                    </div>
                    <h1>{process.env.MIX_API_KEY}</h1>
                </div>
            </div>

        );
    }
}

export default SliderManager;