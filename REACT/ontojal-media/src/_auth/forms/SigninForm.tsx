import * as z from "zod";
import { zodResolver } from "@hookform/resolvers/zod";

import { Button } from "@/components/ui/button";
import { useForm } from "react-hook-form";

import {
  Form,
  FormControl,
  FormField,
  FormItem,
  FormLabel,
  FormMessage,
} from "@/components/ui/form";
import { Input } from "@/components/ui/input";
import { SigninFormValidation } from "@/lib/validation";
import { Icons } from "@/components/icons";
import { CardContent } from "@/components/ui/card";
import Loader from "@/components/shared/Loader";
import { Link, useNavigate } from "react-router-dom";
import { toast } from "sonner";
import { useSignInAccount } from "@/lib/react-query/queriesAndMutations";
import { useUserContext } from "@/context/AuthContext";


const SigninForm = () => {
  const navigate = useNavigate();
  const { checkAuthUser, isLoading: isUserLoading } = useUserContext();

  const {mutateAsync: signInAccount} = useSignInAccount();

  const form = useForm<z.infer<typeof SigninFormValidation>>({
    resolver: zodResolver(SigninFormValidation),
    defaultValues: {
      email: "",
      password: "",
    },
  });

  async function onSubmit(values: z.infer<typeof SigninFormValidation>) {
    console.log(values);

    const session = await signInAccount({
      email: values.email,
      password: values.password,
    })

    if (!session) {
      return toast.error('Sign in failed. Please try again.')
    }

    const isLoggedIn = await checkAuthUser();

    if(isLoggedIn) {
      form.reset();
      navigate("/");
    }else{
      return toast.error("Sign up failed, PLease try again");
    }
  }

  return (
      <CardContent className="grid gap-4">
        <div className="grid gap-2">
          <Form {...form}>
            <div className="sm:w-420 flex-center flex-col">
              {/* <img src="/assets/images/logo.svg" alt="logo" /> */}
              <img
                src="/assets/images/ontojal-logo2.png"
                alt="logo"
                width="200"
                height="200"
              />
              <h2 className="h3-bold md:h2-bold pt-5 sm:pt-12">
                Log in your account
              </h2>
              <p className="text-light-3 small-medium md:base-regular mt-2">
                Welcome back!, please enter your details
              </p>

              <form
                onSubmit={form.handleSubmit(onSubmit)}
                className="flex flex-col gap-5 w-full mt-4"
              >
                <FormField
                  control={form.control}
                  name="email"
                  render={({ field }) => (
                    <FormItem>
                      <FormLabel>Email</FormLabel>
                      <FormControl>
                        <Input type="text" className="shad-input" {...field} />
                      </FormControl>
                      <FormMessage />
                    </FormItem>
                  )}
                />

                <FormField
                  control={form.control}
                  name="password"
                  render={({ field }) => (
                    <FormItem>
                      <FormLabel>Password</FormLabel>
                      <FormControl>
                        <Input type="password" className="shad-input" {...field} />
                      </FormControl>
                      <FormMessage />
                    </FormItem>
                  )}
                />
                <Button type="submit" className="shad-button_primary">
                  {isUserLoading ? (
                    <div className="flex-center gap-2">
                      <Loader />
                    </div>
                  ): "Sign in"}
                </Button>
                <p className="text-small-regular text-light-2 text-center mt-2">
                  Create an new account?
                  <Link to="/sign-up" className="text-primary-600 text-small-semibold ml-1">Sign up</Link>
                </p>
              </form>
            </div>
          </Form>
        </div>
        <div className="relative mt-3">
          <div className="absolute inset-0 flex items-center">
            <span className="w-full border-t" />
          </div>
          <div className="relative flex justify-center text-xs uppercase">
            <span className="bg-background px-2 text-muted-foreground">
              Or continue with
            </span>
          </div>
        </div>
        <div className="grid grid-cols-2 gap-6">
          <Button variant="outline">
            <Icons.gitHub className="mr-2 h-4 w-4" />
            Github
          </Button>
          <Button variant="outline">
            <Icons.google className="mr-2 h-4 w-4" />
            Google
          </Button>
        </div>
      </CardContent>
  );
};

export default SigninForm;
