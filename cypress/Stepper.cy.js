import Stepper from '../resources/js/Components/Test.vue'

describe('<Stepper />', () => {
    it('clicking + fires a change event with the incremented value', () => {
        const onChangeSpy = cy.spy().as('onChangeSpy')
        cy.mount(Stepper, {props: {onChange: onChangeSpy}})
        cy.get('[data-cy=increment]').click()
        cy.get('@onChangeSpy').should('have.been.calledWith', 1)
    })
})
