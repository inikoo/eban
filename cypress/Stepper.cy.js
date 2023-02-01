import Stepper from '../resources/js/Components/Test.vue'

describe('<Stepper />', () => {
    it('renders', () => {
        // see: https://on.cypress.io/mounting-vue
        cy.mount(Stepper)
    })
})
