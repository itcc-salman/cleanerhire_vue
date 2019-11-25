import Vue from 'vue'
import Card from './Card'
import Child from './Child'
import FrontHeader from './FrontHeader'
import FrontFooter from './FrontFooter'
import Button from './Button'
import Checkbox from './Checkbox'
import HasError from './Haserror'
import Panel from './Panel'
import { AlertError, AlertSuccess } from 'vform'

// Components that are registered globaly.
[
  Card,
  Child,
  FrontHeader,
  FrontFooter,
  Button,
  Checkbox,
  HasError,
  Panel,
  AlertError,
  AlertSuccess
].forEach(Component => {
  Vue.component(Component.name, Component)
})
